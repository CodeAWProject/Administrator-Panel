<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
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
        return view('invoice.index', ['invoices' => Invoice::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $templateID = auth()->user()->company->invoice_template_id;
        $company = auth()->user()->company;
        $invoiceTemplate = InvoiceTemplate::find($templateID);
        return view('invoice.create', ['invoiceTemplate' => $invoiceTemplate], ['templateID' => $templateID], ['company' => $company]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'invoice_number' => 'required',
            'date_issue' => 'required',
            'company_id' => 'required',
            'invoice_template_id' => 'required'                
        ]);

        
        $company = auth()->user()->company;
        $company->invoices()->create($validatedData);

        

        return redirect()->route('invoices.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
