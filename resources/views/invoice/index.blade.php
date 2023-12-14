<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            @forelse ($invoices as $invoice)
            
                
            
            <a href="{{route('invoices.edit', $invoice)}}">
                <x-card class="mb-4 flex space-x-8">
                    <p>{{$invoice->invoice_number}}</p>

                    @forelse ($customers as $customer)
                    @if ($invoice->customer_id == $customer->id)
                        <p>{{$customer->name}} {{$customer->last_name}}</p>
                    @endif      
                    @empty
                            
            @endforelse
                
                </x-card>
            </a>
                
                
            @empty
            <div>
                <p>Geen facturen</p>    
            </div>    
            @endforelse
            
            
            <div class="mt-5">
                <a href="{{route('invoices.create')}}">Factuur toevogen</a>

                
            </div>
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>