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
    

    //FIXME
    public function viewPDF(Request $request, string $id)
    {
        
        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID); 
        //$pdf = SnappyPdf::loadView($invoiceTemplate->view_path);

       $html = view('components.invoice-edit2')->render();
       $pdf = SnappyPdf::loadHTML($html);
       return $pdf->stream('invoice.pdf');
        //$pdf = PDF::loadView('components.invoice1');
        //
    }

    public function downloadPDF()
    {
        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID);
        $pdfDownload = SnappyPdf::loadView($invoiceTemplate->view_path);
        return $pdfDownload->download('invoice.pdf');
    }

    public function viewEditPDF($id)
    {

        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID); 

        $invoice = Invoice::find($id);
        $custommerID = $invoice->customer_id;
        $currentCustommer = Customer::find($custommerID);
        $currentServices = Service::where('invoice_id', $invoice->id)->get();
        $company = auth()->user()->company; 
        $CompanyID = $company->id;
        $customers = Customer::where('company_id', '=', $CompanyID)->get();

        $invoiceArr = [
            'invoice' => $invoice,
            'invoiceTemplate' => $invoiceTemplate,
            'currentCustommer' => $currentCustommer,
            'currentServices' => $currentServices
        ];
        
        $html = view('components.invoice-edit2', ['invoiceArr' => $invoiceArr, 'company' => $company, 'customers' => $customers])->render();
        $pdf = SnappyPdf::loadHTML($html);
        return $pdf->stream('invoice.pdf');
        
    }
}
