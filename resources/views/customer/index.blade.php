<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1>Contacten</h1>
            @foreach ($customers as $customer)
            <a href="{{route('customers.show', $customer)}}">
                <x-card class="flex gap-1 mb-4">
                    <p>{{$customer->name}}</p>
                    <p>{{$customer->last_name}}</p>
                </x-card>
            </a>
            
            @endforeach
            
            
            <a href="{{route('customers.create')}}">Toevoegen</a>
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>