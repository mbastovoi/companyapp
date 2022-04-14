<x-header />

<section class="px-6 py-6">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold">Log In</h1>
        <form method="POST" action="login" class="text-center mt-10">
            @csrf

            <div class="mb-6">

                <div class="mb-6">
                    <input name="email" class="p-2" type="email" />
                </div>

                <div class="mb-6">
                    <input name="password" class="p-2" type="password" />
                </div>
                <div class="mb-6">
                    <button class="bg-blue-200 mt-10 p-4 px-10 block m-auto rounded-xl" type="submit">
                        Log in
                    </button>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs"> {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif
        </form>
    </main>
</section>

<x-footer />
