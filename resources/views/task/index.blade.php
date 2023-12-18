<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="mb-4">Tasks</h1>



            <x-button x-data x-on:click="$dispatch('open-modal', {name: 'task'})">Task aanmaken</x-button>
            
            
            

            <x-modal name="task">
                <x-slot:body>
                    <span class="px-5">Create new task</span>
                </x-slot>
            </x-modal>
            
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>