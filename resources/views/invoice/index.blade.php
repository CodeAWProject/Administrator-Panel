<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            @forelse ($invoices as $invoice)
                <x-card class="mb-4">
                    {{$invoice->invoice_number}}
                </x-card>
                
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