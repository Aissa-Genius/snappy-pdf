<?php

namespace App\Http\Controllers;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class BackendPrintController extends Controller
{
    public function index()
    {
        return view('backend_print.index');
    }

    public function html()
    {
        $data = $this->loadJsonData();

        if (is_null($data)) {
            return null;
        }

        return view('backend_print.html', $data);
    }

    public function pdf()
    {
        $data = $this->loadJsonData();

        if (is_null($data)) {
            return null;
        }

        $pdf = PDF:: loadView('backend_print.html', $data);

        $filename = 'Recommandation_Ingenieurie_' . date('Y-m-d');

        return $pdf->download($filename);
    }

    /* ************************** */

    public function loadJsonData()
    {

        /* Where is my Data : remote_url OR local_file ? Choose One */
        //$myDataIsAt = 'remote_url';
        $myDataIsAt = 'local_file';
        /* *************************************** */

        $pdfData = null;

        switch ($myDataIsAt) {
            case 'remote_url':
                $url = URL::to('/data.json');
                $pdfData = $this->loadJsonDataFromUrl($url);
                break;
            case 'local_file':
                $filename = 'data.json';
                $pdfData = $this->loadJsonDataFromLocalFile($filename);
        }

        if (is_null($pdfData)) {
            return null;
        }
        return $this->parseData($pdfData);
    }

    public function loadJsonDataFromUrl($url)
    {
        try {
            $jsonData = file_get_contents($url);

        } catch (Exception $e) {
            Log::error($e->getMessage());

            return null;
        }

        return json_decode($jsonData, true);
    }

    public function loadJsonDataFromLocalFile($filename)
    {
        if (!file_exists(base_path() . '/public/' . $filename)) {
            return null;
        }

        try {
            $jsonData = file_get_contents(base_path() . '/public/' . $filename);

        } catch (Exception $e) {
            Log::error($e->getMessage());

            return null;
        }

        return json_decode($jsonData, true);
    }

    public function parseData($pdfData)
    {
        //dd($pdfData);

        try {
            return [
                'titles' => [
                    'perimetre' => explode(',', $pdfData['demande']['address']),
                    'destinataire' => [$pdfData['demande']['client_name'], $pdfData['demande']['phone'], $pdfData['demande']['email']],
                ],

                'intrants' => explode(PHP_EOL, $pdfData['intrants_considere_lors_presente']),

                'travaux' => explode(PHP_EOL, $pdfData['travaux_realiser_et_livrables']),

                'notes' => explode(PHP_EOL, $pdfData['notes_et_exclusions']),

                'croquis' => $pdfData['attachments'][0]['url'],

                'ventilation' => $pdfData['catalogues'],

                'signatures' => [
                    'signature_prepared' => $pdfData['demande']['occupied_by']['signatureurl'],

                    'name_prepared' => $pdfData['demande']['occupied_by']['first_name'] . ' '
                        . $pdfData['demande']['occupied_by']['last_name'] . ', '
                        . $pdfData['demande']['occupied_by']['titre'],

                    'signature_approved' => $pdfData['aprroved']['approved_by']['signatureurl'],

                    'name_approved' => $pdfData['aprroved']['approved_by']['first_name'] . ' '
                        . $pdfData['aprroved']['approved_by']['last_name'] . ', '
                        . $pdfData['aprroved']['approved_by']['titre'],

                    'seal_image' => $pdfData['aprroved']['approved_by']['sceururl'],

                    'seal_date' => $pdfData['aprroved']['approved_at'],
                ]
            ];
        } catch (Exception $e) {
            Log::error($e->getMessage());
            //dump($e->getMessage());

            return null;
        }
    }
}
