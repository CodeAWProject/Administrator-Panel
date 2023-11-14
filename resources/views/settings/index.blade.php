<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <div class="grid grid-cols-3">
                <div>
                    <a href="{{route('user.show', $user->id)}}">Account</a>
                </div>
    
                <div>
                    <a href="{{route('company.index', $user->id)}}">Bedrijfsgegevens</a>      
                </div>
    
                <div>
                    <h3>Meldingen</h3>
                </div>

                <div>
                    <h3>Sessies</h3>
                </div>
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

</x-layout>
