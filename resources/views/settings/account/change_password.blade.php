<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Wijzig je wachtwoord</h1>
            <x-card class="py-8 px-16">

                
                <form action="{{route('update_password', ['user' => auth()->user()])}}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-8">
                        <label for="current_password">Huidige wachtwoord</label>
                        <x-text-input name="current_password" type="password" ></x-text-input>

                        <label for="password">Nieuw wachtwoord</label>
                        <x-text-input name="password" type="password"></x-text-input>

                        <label for="confirm_password">Bevestig wachtwoord</label>
                        <x-text-input name="confirm_password" type="password"></x-text-input>

                    </div>

                    <x-button>Opslaan</x-button>
                </form>
            </x-card>
            
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>
    
