<x-layout>
    
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Sign in tou your account</h1>

<x-card class="py-8 px-16">
    <form action="{{route('auth.store')}}" method="POST">
        @csrf

        <div class="mb-8">
            <x-label for="email" :required="true"></x-label>
            <x-text-input type="email" name="email"></x-text-input>

            <x-label for="password" :required="true"></x-label>
            <x-text-input type="password" name="password"></x-text-input>
        </div>

        <x-button>Login</x-button>
    </form>
</x-card>

</x-layout>