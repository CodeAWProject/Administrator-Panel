<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

        <h1>Tasks API Tokens</h1>

        @if (session()->has('access_token'))
            <div class="flex gap-4">
                <div>Access Token</div>
                <div>{{session()->get('access_token')[0]}}</div>
            </div>


            <div class="flex gap-4">
                <div>Refresh Token</div>
                <div>{{session()->get('refresh_token')[0]}}</div>
            </div>

        @else
            <a href="{{route('getTokens')}}">Genereer nieuw token</a>   
        @endif

        


         
                    
        </x-top-nav-bar>
    
        
    </div>


</x-layout>
