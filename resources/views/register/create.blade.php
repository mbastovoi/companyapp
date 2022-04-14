<x-header />


<h2 class="text-xl text-red-600 mt-10 text-center">Create a User</h2>

<form class="flex-col " method="POST" action="/register">
    @csrf
    <div class="flex-col align-center register-input">
        <x-form.input name="name" type="text" />
        <x-form.input name="username" type="text" />
        <x-form.input name="email" type="email" />
        <x-form.input name="password" type="password" />

        <button class="bg-blue-200 mt-10 p-4 block m-auto rounded-xl px-10" type='submit'>Submit</button>
    </div>

    <x-footer />
