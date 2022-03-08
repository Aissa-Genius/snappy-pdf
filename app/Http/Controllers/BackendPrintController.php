<?php

namespace App\Http\Controllers;

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

    public function pdf(){
        return view('backend_print.pdf');
    }

}
