<x-layout>


    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>
            <h1 class="mb-4">Tasks</h1>

            {{-- @dd($responseData) --}}

            {{-- @for ($i = 0; $i < $responseData; $i++)
                {{$responseData[$i]}}
            @endfor --}}

            @foreach ($responseData as $task)

                <div class="flex">
                    <div>{{$task["name"]}}</div>
                    <div>{{$task["priority"]}}</div>
                    <div>{{$task["is_completed"]}}</div>
                </div>
                
                
            @endforeach

            <x-button x-data x-on:click="$dispatch('open-modal', {name: 'task'})">Task aanmaken</x-button>
            
            
            

            <x-modal name="task">
                <x-slot:body>
                    <form action="{{route('tasks.store')}}" method="POST">
                        @csrf
                
                        <div class="mb-8 p-8">
                            <label for="name">Naam</label>
                            <x-text-input name="name" type="text"></x-text-input>
                
                            <label for="priority">Prioriteit</label>
                            <x-text-input name="priority" type="number"></x-text-input>

                            <label for="is_completed"></label>
                            <select name="is_completed">
                                <option value="0">Nee</option>
                                <option value="1">Ja</option>
                            </select>
                
                            <label for="user_id">User ID</label>
                            <x-text-input name="user_id" type="number"></x-text-input>
                
                            
                        </div>
                
                        <x-button type="submit">Maak</x-button>
                    </form>
                </x-slot>
            </x-modal>
            
        </x-top-nav-bar>
    
        
    </div>

    
</x-layout>