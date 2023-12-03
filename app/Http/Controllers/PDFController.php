<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    
    public function viewPDF()
    {

        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID); 
       $pdf = PDF::loadView($invoiceTemplate->view_path);
       return $pdf->stream();
        //$pdf = PDF::loadView('components.invoice1');
        //
    }

    public function downloadPDF()
    {
        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID);
        $pdfDownload = PDF::loadView($invoiceTemplate->view_path);
        return $pdfDownload->download('invoice.pdf');
    }
}
