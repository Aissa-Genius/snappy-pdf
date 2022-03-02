<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadView('pdf.example');

    $pdf->setOptions([
        'margin-top' => '50',
        'page-size' => 'a4',
        'margin-bottom' => '8',
        'footer-center' => '[page]',
        'header-html' =>  view('pdf._header'),
        'footer-html' =>  view('pdf._footer'),


    ]);
    return $pdf->stream();
  //  return view('pdf.example');
});
