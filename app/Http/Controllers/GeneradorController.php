<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    public function imprimir(){
        $pdf = \PDF::loadView('pdf');
        return $pdf->download('pdf.pdf');
    }
}
