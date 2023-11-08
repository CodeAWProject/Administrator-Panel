<x-layout>
    @foreach ($invoices as $invoice)
    <x-card class="mb-4">
        {{$invoice->description}}
    </x-card>
        
    @endforeach   
</x-layout>