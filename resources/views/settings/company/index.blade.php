<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
    
            {{auth()->user()->company->company_name}}
            {{auth()->user()->company->company_legal_form}}
            {{auth()->user()->company->adres_line}}
            {{auth()->user()->company->post_code}}
            {{auth()->user()->company->country}}
            {{auth()->user()->company->kvk_nummer}}
            {{auth()->user()->company->btw_id}}
            {{auth()->user()->company->bank_account}}
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>
