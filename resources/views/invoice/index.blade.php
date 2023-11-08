<x-layout>
    @foreach ($invoices as $invoice)
        <div>{{$invoice->invoice_number}}</div>
        <div>{{$invoice->btw}}</div>
        <div>{{$invoice->description}}</div>
        <div>{{$invoice->category}}</div>
        <div>{{$invoice->footer}}</div>
    @endforeach
</x-layout>