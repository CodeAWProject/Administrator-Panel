<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="my-16 text-center text-4xl font-medium text-slate-600">{{$invoiceTemplate->title}} </h1>

            <x-card class="py-8 px-16">
                @switch($invoiceTemplate->id)
                    @case(1)
                        <x-invoice1></x-invoice1>
                        @break

                    @case(2)
                        <x-invoice2></x-invoice2>
                        @break    

                    @case(3)
                        <x-invoice3></x-invoice3>
                        @break 
                        
                @endswitch

                <div>
                    <form action="{{route('update_invoiceTemplate')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-text-input type="hidden" name="invoice_template_id" :value="$invoiceTemplate->id"></x-text-input>
                        <x-button>Selecteer</x-button>
                    </form>
                </div>
            </x-card>
            
        </x-top-nav-bar>
    
        
    </div>
    
</x-layout>
    
