<x-layout>

    

    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

            <div class="flex gap-3">
                <div>
                    <form action="{{route('view_edit_pdf', ['id' => $invoiceArr["invoice"]->id])}}" method="POST" target="__blank">
                        @csrf
                        <x-button>View PDF</x-button>
                    </form>
                </div>
    
                <div>
                    <form action="{{route('download_pdf', ['id' => $invoiceArr["invoice"]->id])}}" method="POST" target="__blank">
                        @csrf
                        <x-button >Download PDF</x-button>
                    </form>
                </div>
            </div>
            
         
            <section class="py-20">
                <div class="invoice-div">
                    

                        @switch($invoiceArr["invoice"]->invoice_template_id)
                        @case(1)
                            <x-invoice1></x-invoice1>
                            @break

                        @case(2)
                            <x-invoice-edit2 :invoiceArr="$invoiceArr"></x-invoice-edit2>
                            @break    

                        @case(3)
                            <x-invoice3></x-invoice3>
                            @break 
                            
                        @endswitch
                    
                </div>
                    
            </section>
         
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>