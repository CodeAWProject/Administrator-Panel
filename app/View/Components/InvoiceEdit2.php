<?php

namespace App\View\Components;

use App\Models\Customer;
use App\Models\Invoice;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InvoiceEdit2 extends Component
{

    public $invoiceArr;
    /**
     * Create a new component instance.
     */
    public function __construct($invoiceArr)
    {
        $this->invoiceArr = $invoiceArr;
    }

    /**
     * Get the view / contents that represent the component.
     */

     


    public function render(): View|Closure|string
    {
        

        $company = auth()->user()->company;
        $CompanyID = auth()->user()->company->id;

        // $currentInvoice = Invoice::find();
        $customers = Customer::where('company_id', '=', $CompanyID)->get();
        return view('components.invoice-edit2',
        ['company' => $company,
        'customers' => $customers
        ]);
    }
}
