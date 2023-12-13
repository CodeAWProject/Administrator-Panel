<?php

namespace App\View\Components;

use App\Models\Customer;
use App\Models\InvoiceTemplate;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class invoiceCreate2 extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $company = auth()->user()->company;
        $CompanyID = auth()->user()->company->id;
        $invoiceTemplateID = auth()->user()->company->invoice_template_id;
        $invoiceTemplate2 = InvoiceTemplate::where('id', '=', $invoiceTemplateID)->first();
        
        $customers = Customer::where('company_id', '=', $CompanyID)->get();
        return view('components.invoice-create2', 
        ['company' => $company, 
        'customers' => $customers,
        'invoiceTemplate2' => $invoiceTemplate2
        ]);
    }
}
