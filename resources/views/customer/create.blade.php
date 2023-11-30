<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Contact toevoegen</h1>

            <x-card class="py-8 px-16">
                <form action="{{route('customer.store')}}" method="POST">
                    @csrf


                    <div class="mb-8">
                        <label for="name">Voornaam</label>
                        <x-text-input name="name" type="text"></x-text-input>

                        <label for="last_name">Achternaam</label>
                        <x-text-input name="last_name" type="text"></x-text-input>

                        <label for="phone_number">Telefoonnummer</label>
                        <x-text-input name="phone_number" type="text"></x-text-input>

                        <label for="customer_number">Klantnummer</label>
                        <x-text-input name="customer_number" type="number"></x-text-input>

                        <label for="adres_line">Straatnaam</label>
                        <x-text-input name="adres_line" type="text"></x-text-input>

                        <label for="post_code">Postcode</label>
                        <x-text-input name="post_code" type="text"></x-text-input>

                        <label for="city">Plaats</label>
                        <x-text-input name="city" type="text"></x-text-input>

                        <label for="country">Land</label>
                        <x-text-input name="country" type="text"></x-text-input>

                        <label for="bank_account">Rekeningnummer</label>
                        <x-text-input name="bank_account" type="text"></x-text-input>

                        <label for="email">E-mailadres facturen</label>
                        <x-text-input name="email" type="email"></x-text-input>

                        <label for="in_the_name_of">Ten name van</label>
                        <x-text-input name="in_the_name_of" type="email"></x-text-input>
                    </div>

                    <x-button>Opslaan</x-button>
                </form>
            </x-card>
            
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>
    
