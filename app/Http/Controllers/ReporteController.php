<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\Models\Categoria;


class ReporteController extends Controller
{
    
    public function reporte()
    {
    	$categoria 	=	Categoria::all();
        $pdf 		= 	PDF::loadView('reporte',compact('categoria'));
        $pdf->setPaper('A4', 'Portrait');
        return $pdf->stream('Reporte'.'.pdf');
    }
}
