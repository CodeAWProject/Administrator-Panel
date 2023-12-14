<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $companyID = auth()->user()->company->id;

        
        return view('invoice.index', 
        ['invoices' => Invoice::all(),
        'companyID' => $companyID,
        'customers' => Customer::where('company_id', '=', $companyID)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $templateID = auth()->user()->company->invoice_template_id;
        $company = auth()->user()->company;
        $invoiceTemplate = InvoiceTemplate::find($templateID);
        return view('invoice.create', 
        [
            'invoiceTemplate' => $invoiceTemplate, 
            'templateID' => $templateID, 
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Invoice $invoice)
    {
    
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'invoice_number' => 'required',
            'date_issue' => 'required',
            'company_id' => 'required',
            'invoice_template_id' => 'required'                
        ]);

        
        $company = auth()->user()->company;
        // $company->invoices()->create($validatedData);

        $newInvoice = $company->invoices()->create($validatedData);
        
        $newlyCreatedId = $newInvoice->id;
        

        return redirect()->route('invoices.edit', ['invoice' =>$newlyCreatedId]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {

        $templateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate = InvoiceTemplate::find($templateID); 

        $custommerID = $invoice->customer_id;
        $currentCustommer = Customer::find($custommerID);

        $invoiceArr = [
            'invoice' => $invoice,
            'invoiceTemplate' => $invoiceTemplate,
            'currentCustommer' => $currentCustommer,
        ];

        return view('invoice.edit', 
        [
            'invoiceArr' => $invoiceArr,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'invoice_number' => 'required',
            'date_issue' => 'required',
            'company_id' => 'required',              
        ]);
        
        $company = auth()->user()->company;

        $company->invoices()->where('id', $id)->update($validatedData);

        $updatedInvoice = $company->invoices()->find($id);
        

        return redirect()->route('invoices.edit', $updatedInvoice);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
