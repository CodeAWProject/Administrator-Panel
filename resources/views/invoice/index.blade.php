<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            @foreach ($invoices as $invoice)
                <x-card class="mb-4">
                    {{$invoice->description}}
                </x-card>
                
            @endforeach   
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>