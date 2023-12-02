<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

            <div>
                <form action="{{route('view_pdf')}}" method="POST" target="__blank">
                    @csrf
                    <x-button>View PDF</x-button>
                </form>
            </div>
         
            <section class="py-20">
                <x-invoice1></x-invoice1>    
            </section>
         
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>