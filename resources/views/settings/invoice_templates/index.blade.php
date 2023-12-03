<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <div>
                <h1>Factuur templates</h1>

                @foreach ($invoiceTemplates as $invoiceTemplate)
                <a href="{{route('changeInvoiceTemplate', $invoiceTemplate)}}">
                    <x-card class="mb-4">{{$invoiceTemplate->title}}</x-card>
                </a>
                @endforeach
                
                        
            </div>
            
        </x-top-nav-bar>
    
        
    </div>

</x-layout>