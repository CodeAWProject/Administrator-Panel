<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->input('invoice_id');

        $validatedData = $request->validate([
            'number' => 'required',
            'description' => 'required',
            'btw' => 'required',
            'amount' => 'required',
            'invoice_id' => 'required'                
        ]);

        $company = auth()->user()->company;
        $invoice = $company->invoices->find($id);
        $invoice->services()->create($validatedData);


        return redirect()->route('invoices.edit', ['invoice' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        
    }

    public function updateAll(Request $request, string $id)
    {
        $data = $request->all();

        foreach ($data as $key => $value) {
            if (preg_match('/^number(\d+)$/', $key, $matches)) {
                $number =  $matches[1];

                $service = Service::find($data["id$number"]);

                if ($service) {
                    $service->update([
                        'description' => $data["description$number"],
                        'btw' => $data["btw$number"],
                        'amount' => $data["amount$number"],
                    ]);
                } 
            }
        }

        return redirect()->route('invoices.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Service $service)
    {
        
        $invoiceID = $request->input('invoice_id');
        $service->delete();

        return redirect()->route('invoices.edit', ['invoice' => $invoiceID]);
    }
}
