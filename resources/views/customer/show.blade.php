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

                <div>
                    <a href="{{route('customers.edit', $customer)}}">Bewerken</a>
                </div>
                

               
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

    <div></div>

    
</x-layout>
