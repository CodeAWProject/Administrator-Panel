<x-layout>
    
        <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Create a Account</h1>

    <x-card class="py-8 px-16">
        <form action="{{route('user.store')}}" method="POST">
            @csrf

            <div class="mb-8">
                <label for="Name">Name</label>
                <x-text-input name="email"></x-text-input>

                <label for="email">Email</label>
                <x-text-input type="email" name="email"></x-text-input>
                <label for="password">Password</label>
                <x-text-input type="password" name="password"></x-text-input>
            </div>

            <x-button>Register</x-button>
        </form>
    </x-card>
    
</x-layout>