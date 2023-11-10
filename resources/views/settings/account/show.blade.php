<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

            <h1>Instellingen</h1>

            <div class="grid grid-cols-3">
                <div>
                    <h3>Account</h3>
                </div>
    
                <div>
                    <h3>Bedrijfsgegevens</h3>      
                </div>
    
                <div>
                    <h3>Meldingen</h3>
                </div>

                <div>
                    <h3>Sessies</h3>
                </div>
            </div>
            
            {{auth()->user()->name}}
            {{auth()->user()->email}}
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>



<x-layout>
    
</x-layout>