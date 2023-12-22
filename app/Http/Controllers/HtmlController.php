<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceTemplate;
use App\Models\Service;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function convertHTML($id) {
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
    
        return SnappyPdf::loadHTML($html);
    }
}
