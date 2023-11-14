<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Bewerk bedrijfsgegevens</h1>

            <x-card class="py-8 px-16">
                <form action="{{route('company.update', $company)}}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-8">
                        <label for="company_name">Bedrijfsnaam</label>
                        <x-text-input name="company_name" type="text" :value="$company->company_name"></x-text-input>

                        <label for="kvknummer">KVK-nummer</label>
                        <x-text-input name="kvk_nummer" type="number" :value="$company->kvk_nummer"></x-text-input>

                        <label for="btw_id">Btw-identificatie</label>
                        <x-text-input name="btw_id" type="btw_id" :value="$company->btw_id"></x-text-input>

                        <label for="company_legal_form">Rechtsvorm</label>
                        <x-text-input type="text" name="company_legal_form" :value="$company->company_legal_form"></x-text-input>

                        <label for="adres_line">Straatnaam</label>
                        <x-text-input name="adres_line" type="text" :value="$company->adres_line"></x-text-input>

                        <label for="post_code">Postcode</label>
                        <x-text-input name="post_code" type="text" :value="$company->post_code"></x-text-input>

                        <label for="country">Land</label>
                        <x-text-input name="country" type="text" :value="$company->country"></x-text-input>

                        <label for="bank_account">Rekeningnummer </label>
                        <x-text-input name="bank_account" type="text" :value="$company->bank_account"></x-text-input>
                    </div>

                    <x-button>Opslaan</x-button>
                </form>
            </x-card>
            
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>
    
