<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    
    public function viewPDF()
    {

       $pdf = PDF::loadView('components.invoice1');
       return $pdf->stream();
        //$pdf = PDF::loadView('components.invoice1');
        //
    }

    public function downloadPDF()
    {
        $pdfDownload = PDF::loadView('components.invoice1');
        return $pdfDownload->download('invoice1.pdf');
    }
}
