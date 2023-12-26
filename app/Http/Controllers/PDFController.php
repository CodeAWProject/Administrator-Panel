<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InvoiceController;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceTemplate;
use App\Models\Service;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use PDF;

class PDFController extends InvoiceController
{
    public function __construct(
        private HtmlController $htmlController
    ) {

    }

    //FIXME
    public function viewPDF(Request $request)
    {
        
        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID); 
        $pdf = SnappyPdf::loadView($invoiceTemplate->view_path);
       
        return $pdf->stream('invoice.pdf');
    }


    public function downloadPDF($id)
    {
        
        $pdf = $this->htmlController->convertHTML($id);
        return $pdf->download('invoice.pdf');
    }

    public function viewEditPDF($id)
    {

        
        $pdf = $this->htmlController->convertHTML($id);
        return $pdf->stream('invoice.pdf');
    }
        
}
