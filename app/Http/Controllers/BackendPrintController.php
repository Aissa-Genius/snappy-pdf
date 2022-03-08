<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class BackendPrintController extends Controller
{
    public function index(){
        return view('backend_print.index');
    }

    public function html(){
        return view('backend_print.html')->with([
            'var_a' => 'A',
            'var_b' => 'B',
        ]);
    }

    public function dompdf(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf._header');
         return $pdf->stream();
        //return view('pdf._header');
    }

}
