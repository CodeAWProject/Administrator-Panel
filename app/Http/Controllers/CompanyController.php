<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->authorizeResource(Company::class);
    }
    public function index()
    {
        return view('settings.company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required',
            'company_legal_form' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'country' => 'required',
            'kvk_nummer' => 'required',
            'btw_id' => 'required',
            'bank_account' => 'required',        
        ]);

        
        auth()->user()->company()->create($validatedData);
        return redirect()->route('user.index');
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
    public function edit(Company $company)
    {
        $this->authorize('edit', $company);
        return view('settings.company.edit', ['company' => $company]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {

        $validatedData = $request->validate([
            'company_name' => 'required',
            'company_legal_form' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'country' => 'required',
            'kvk_nummer' => 'required',
            'btw_id' => 'required',
            'bank_account' => 'required',        
        ]);

        auth()->user()->company()->update($validatedData);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
