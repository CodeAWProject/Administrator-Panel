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
        
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);
    
        // Get all buttons and set style attribute to display: none
        $buttons = $dom->getElementsByTagName('button');
        foreach ($buttons as $button) {
            $button->setAttribute('style', 'display: none;');
        }
    
        // Get all input elements with type="button" and set style attribute to display: none
        $inputButtons = $dom->getElementsByTagName('input');
        foreach ($inputButtons as $inputButton) {
            if ($inputButton->getAttribute('type') === 'button') {
                $inputButton->setAttribute('style', 'display: none;');
            }
        }
    
        // Save the modified HTML
        $html = $dom->saveHTML();
    
        $pdf = SnappyPdf::loadHTML($html);
        return $pdf->stream('invoice.pdf');
    }
        
}
