<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

            <div class="flex gap-3">
                <div>
                    <form action="{{route('view_pdf')}}" method="POST" target="__blank">
                        @csrf
                        <x-button>View PDF</x-button>
                    </form>
                </div>
    
                <div>
                    <form action="{{route('download_pdf')}}" method="POST">
                        @csrf
                        <x-button>Download PDF</x-button>
                    </form>
                </div>
            </div>
            
         
            <section class="py-20">
                <div class="invoice-div">
                    <x-invoice3></x-invoice3>
                </div>
                    
            </section>
         
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>