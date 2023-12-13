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

    <div class="invoice-2-create">
        <table class="order-details">
            <thead>
                <tr>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <button x-data x-on:click="$dispatch('open-modal', {name: 'customer-contact'})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                          </button>
                        <span>Fulfilment Group B.V.</span> <br>
                        <span>T.a.v. B. V.</span> <br>
                        <span>2331CN Leiden</span> <br>
                        <span>Weg en Land 16:</span> <br>
                        <span>2661DB Bergschenhoek</span> <br>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <span><b>Activityware</b></span> <br>
                        <span>Elisabeth Brugsmastraat 4</span> <br>
                        <span>2331CN Leiden</span> <br>
                        <span>KvK</span> <br>
                        <span>Btw:</span> <br>
                        <span>Bank:</span> <br>
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
                <tr x-data="{ colors: ['1x', 'Mi Note 7' , '14000', '0%', '$14000'] }">
                    <template x-for="color in colors">
                        <td x-text="color"></td>
                    </template>
                </tr>

                <tr>
                    <td width="10%">1x</td>
                    <td>
                        Mi Note 7
                    </td>
                    <td width="10%">$14000</td>
                    <td width="10%">0%</td>
                    <td width="15%" class="fw-bold">$14000</td>
                </tr>
                <tr>
                    <td width="10%">2x</td>
                    <td>
                        Vivo V19
                    </td>
                    <td width="10%">$699</td>
                    <td width="10%">21%</td>
                    <td width="15%" class="fw-bold">$699</td>
                </tr>
                <tr>
                    <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                    <td colspan="1" class="total-heading">$14699</td>
                </tr>

                <tr>
                    <td><button x-data x-on:click="$dispatch('open-modal', {name: 'footer'})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg></button></td>
                    <td colspan="5">We verzoeken u vrienelijk het bovenstaande bedrag van $1000 voor 12-12-2023 te voldoen op onze bankrekening. Voor vragen kunt u contact opnement per e-mail</td>

                </tr>
            </tbody>

            
                
        
        </table>
    </div>

    <div>

        <x-modal name="customer-contact">
            <x-slot:body>
                <span>Contact customer details</span>
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
                <span class="px-5">Footer content</span>
            </x-slot>
        </x-modal>

    </div>
    
    

</body>
</html>