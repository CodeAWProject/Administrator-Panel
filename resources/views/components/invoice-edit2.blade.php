<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    html,
        
        
        .invoice-2-create table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        .invoice-2-create table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        .invoice-2-create table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
</style>


</head>
<body>

    {{$slot}}

    <div class="invoice-2-create">
        <table class="order-details">
            <thead>
                <tr>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <button x-data x-on:click="$dispatch('open-modal', {name: 'customer-contact'})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg> Selecteer een klant
                          </button>
                        <span></span> <br>
                        <span></span> <br>
                        <span></span> <br>
                        <span></span> <br>
                        <span></span> <br>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <span><b>{{$company->company_name}}</b></span> <br>
                        <span>{{$company->adres_line}}</span> <br>
                        <span>{{$company->post_code}} {{$company->city}}</span> <br>
                        <span>KvK: {{$company->kvk_nummer}}</span> <br>
                        <span>Btw: {{$company->btw_id}}</span> <br>
                        <span>Bank: {{$company->bank_account}}</span> <br>
                    </th>
                </tr>
                
            </thead>
            
        </table>
    
        <table>
            <button x-data x-on:click="$dispatch('open-modal', {name: 'services'})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
              </button>
            <thead>
                
                <tr class="bg-blue">
                    <th>Aantal</th>
                    <th>Omschrijving</th>
                    <th>Bedrag</th>
                    <th>Btw</th>
                    <th>Totaal</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td width="10%"></td>
                    <td>
                        
                    </td>
                    <td width="10%"></td>
                    <td width="10%"></td>
                    <td width="15%" class="fw-bold"></td>
                </tr>
                <tr>
                    <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                    <td colspan="1" class="total-heading">$14699</td>
                </tr>

                <tr>
                    <td><button x-data x-on:click="$dispatch('open-modal', {name: 'footer'})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg></button></td>
                    <td colspan="5">{{$invoiceArr["invoiceTemplate"]->footer}}</td>

                </tr>
            </tbody>

            
                
        
        </table>
    </div>

    <div>

        <x-modal name="customer-contact">
            <x-slot:body>
                
                <div class="p-8">
                    <span>Contact customer details</span>
                    
                    <div class="mb-8 grid grid-cols-2 gap-2" >

                        <form action="{{route('invoices.store')}}" method="POST">
                            @csrf
                
                            
                            <div class="mb-8  gap-2" >

                                <select name="customer_id">
                                    
                                    @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}" {{$customer->id == $invoiceArr["currentCustommer"]->id ? 'selected' : ''}}>{{$customer->name}} {{$customer->last_name}} </option>
                                    @endforeach
                                </select>

                                <label for="invoice_number">Factuurnummer</label>
                                <x-text-input type="number" name="invoice_number" :value="date('Y')"></x-text-input>
                
                                <label for="date_issue">Factuurdatum</label>
                                <x-text-input type="text" name="date_issue" :value="date('d-m-Y')"></x-text-input>

                                <x-text-input name="company_id" type="hidden" :value="$company->id"></x-text-input>
                                
                                
    
                                <button type="button">Regel toevoegen</button>
                            </div>
                
                            <x-button>Opslaan</x-button>
                        </form>


                        
                        

                            
                    </div>
            
                </div>
            </x-slot>
        </x-modal>

        <x-modal name="services">
            <x-slot:body>
                <div class="grid grid-cols-4 p-8">
                    <div>Aantal</div>
                    <div>Omschrijving</div>
                    <div>Btw</div>
                    <div>Bedrag</div>
                </div>
                <div class="p-8">
                    <form action="" method="POST">
                        @csrf
            
                        <div class="mb-8 grid grid-cols-4 gap-2" >
                            <x-text-input type="number" name="number"></x-text-input>
            
                            <x-text-input type="text" name="description"></x-text-input>

                            <x-text-input type="number" name="amount"></x-text-input>

                            <x-text-input type="number" name="amount"></x-text-input>

                            <button type="button">Regel toevoegen</button>
                        </div>
            
                        <x-button>Opslaan</x-button>
                    </form>
                </div>
                
            </x-slot>
        </x-modal>


        <x-modal name="footer">
            <x-slot:body>
                <span class="px-5">Footer</span>
            </x-slot>
        </x-modal>

    </div>
    
    

</body>
</html>