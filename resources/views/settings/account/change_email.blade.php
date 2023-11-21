<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Wijzig het e-mailadres</h1>
            <x-card class="py-8 px-16">

                
                <form action="{{route('update_email', ['user' => auth()->user()])}}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-8">
                        <label for="password">E-mailadres</label>
                        <x-text-input name="email" type="email"></x-text-input>

                        <label for="confirm_password">E-mailbevestiging</label>
                        <x-text-input name="confirm_email" type="email"></x-text-input>

                    </div>

                    <x-button>Opslaan</x-button>
                </form>
            </x-card>
            
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>
    
