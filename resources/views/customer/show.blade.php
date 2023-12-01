<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
    
            <div class="mx-auto pl-10 max-w-6xl">
                <div class="flex gap-4">
                    <div>
                        <p>Naamgegevens</p>
                    </div>
                    <div>{{$customer->name}}</div>
                    <div>{{$customer->last_name}}</div>
                    <div></div>
                </div>

                <div class="flex gap-4">
                    <div>E-mailadres</div>
                    <div>{{$customer->email}}</div>
                    
                </div>

                <div class="flex gap-4">
                    <div>Telefoonnummer</div>
                    <div>{{$customer->phone_number}}</div>
                    
                </div>

                <div class="flex gap-4">
                    <div>Straat + huisnummer</div>
                    <div>{{$customer->adres_line}}</div>
                    
                </div>

                <div class="flex gap-4">
                    <div>Postcode + Plaats</div>
                    <div>{{$customer->post_code}}</div>
                    <div>{{$customer->city}}</div>
                    
                </div>

                <div class="flex mt-6 gap-4 items-center">
                    <div>
                        <a href="{{route('customers.edit', $customer)}}" class="rounded-md border border-slate-300 bg-white px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-slate-100'">Bewerken</a>
                    </div>
                    <div>
                        <form action="{{route('customers.destroy', $customer)}}" method="POST">
                            @csrf
                            
                            @method('DELETE')
                            <x-button>Verwijderen</x-button>
                        </form>
                    </div>
                </div>

                
                

               
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>
