<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
    
            <div class="mx-auto pl-10 max-w-6xl">
                <div class="flex gap-8">
                    <div>Gebruikersnaam</div>
                    <div>{{$user->name}}</div>
                    <div><a href="{{route('change_username')}}" class="underline text-indigo-500">Wijzig gebruikersnaam</a></div>
                </div>

                <div class="flex gap-8">
                    <div>E-mailadres</div>
                    <div>{{$user->email}}</div>
                    <div><a href="{{route('change_email')}}" class="underline text-indigo-500">Wijzig e-mail</a></div>
                </div>


                <div class="flex gap-8">
                    <div>Wachtwoord</div>
                    <div><a href="{{route('change_password')}}" class="underline text-indigo-500">Wijzig je wachtwoord</a></div>
                </div>
               
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>
