<x-layout>
    
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Create a Account</h1>

<x-card class="py-8 px-16">
    <form action="{{route('company.store')}}" method="POST">
        @csrf

        <div class="mb-8">
            <label for="name">Bedrijfsnaam</label>
            <x-text-input name="name" type="text"></x-text-input>

            <label for="kvknummer">KVK-nummer</label>
            <x-text-input name="kvknummer" type="number"></x-text-input>

            <label for="btw_id">Btw-identificatie</label>
            <x-text-input name="btw_id" type="btw_id"></x-text-input>

            <label for="company_form">Rechtsvorm</label>
            <x-text-input type="text" name="company_form"></x-text-input>
            <label for="password">Password</label>
            <x-text-input type="password" name="password"></x-text-input>

            <label for="straatnaam">Straatnaam</label>
            <x-text-input name="straatnaam" type="text"></x-text-input>

            <label for="postcode">Postcode</label>
            <x-text-input name="postcode"></x-text-input>

            <label for="postcode">Land</label>
            <x-text-input name="postcode"></x-text-input>

            <label for="bank_account">Rekeningnummer </label>
            <x-text-input name="bank_account" type="text"></x-text-input>
        </div>

        <x-button>Register</x-button>
    </form>
</x-card>

</x-layout>