<x-layout>
    
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Create a Account</h1>

<x-card class="py-8 px-16">
    <form action="{{route('company.store')}}" method="POST">
        @csrf

        <div class="mb-8">
            <label for="company_name">Bedrijfsnaam</label>
            <x-text-input name="company_name" type="text"></x-text-input>

            <label for="kvknummer">KVK-nummer</label>
            <x-text-input name="kvk_nummer" type="number"></x-text-input>

            <label for="btw_id">Btw-identificatie</label>
            <x-text-input name="btw_id" type="btw_id"></x-text-input>

            <label for="company_legal_form">Rechtsvorm</label>
            <x-text-input type="text" name="company_legal_form"></x-text-input>

            <label for="adres_line">Straatnaam</label>
            <x-text-input name="adres_line" type="text"></x-text-input>

            <label for="post_code">Postcode</label>
            <x-text-input name="post_code" type="text"></x-text-input>

            <label for="city">Plaats</label>
            <x-text-input name="city" type="text"></x-text-input>

            <label for="country">Land</label>
            <x-text-input name="country" type="text"></x-text-input>

            <label for="bank_account">Rekeningnummer </label>
            <x-text-input name="bank_account" type="text"></x-text-input>
        </div>

        <x-button>Maak</x-button>
    </form>
</x-card>

</x-layout>