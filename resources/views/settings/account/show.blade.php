<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
    
            <div class="mx-auto pl-10 max-w-6xl">
                <div class="flex gap-8">
                    <div>Gebruikersnaam</div>
                    <div>{{auth()->user()->name}}</div>
                </div>

                <div class="flex gap-8">
                    <div>E-mailadres</div>
                    <div>{{auth()->user()->email}}</div>
                </div>


                <div class="flex gap-8">
                    <div>Wachtwoord</div>
                    <div>********</div>
                </div>
               
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>
