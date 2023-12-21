
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
                    <td></td>
                    <td colspan="5">{{$invoiceTemplate2->footer}}</td>

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
                                    @forelse ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}} {{$customer->last_name}}</option>
                                    @empty
                                    <option value="">Geen klanten</option>
                                    @endforelse
                                </select>

                                <label for="invoice_number">Factuurnummer</label>
                                <x-text-input type="number" name="invoice_number" :value="date('Y')"></x-text-input>
                
                                <label for="date_issue">Factuurdatum</label>
                                <x-text-input type="text" name="date_issue" :value="date('d-m-Y')"></x-text-input>

                                <x-text-input name="company_id" type="hidden" :value="$company->id"></x-text-input>
                                <x-text-input name="invoice_template_id" type="hidden" :value="$invoiceTemplate2->id"></x-text-input>
                                
    
                                <button type="button">Regel toevoegen</button>
                            </div>
                
                            <x-button>Opslaan</x-button>
                        </form>


                        
                        

                            
                    </div>
            
                </div>
            </x-slot>
        </x-modal>

    </div>