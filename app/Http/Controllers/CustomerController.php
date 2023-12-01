<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = auth()->user()->company;
        return view('customer.index', ['customers' =>  $company->customers()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'customer_number' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'bank_account' => 'required',
            'email' => 'required',
            'in_the_name_of' => 'required'
        ]);

        $company = auth()->user()->company;
        $company->customers()->create($validatedData);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //$company = auth()->user()->company;
        return view('customer.show', ['customer' =>  $customer]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'customer_number' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'bank_account' => 'required',
            'email' => 'required',
            'in_the_name_of' => 'required'
        ]);

        $customer->update($validatedData);

        return redirect()->route('customers.show', $customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
