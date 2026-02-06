<x-layout>
    <x-form title="Log In" description="Welcome Back!">
        <form action="/login" method="POST" class="mt-10 space-y-4">
            @csrf

            <x-form.field name="email" label="Email" type="email"/>
            <x-form.field name="password" label="Password" type="password"/>

            <button type="submit" class="btn m-2 h-12 w-full">Sign In</button>
        </form>
    </x-form>
</x-layout>