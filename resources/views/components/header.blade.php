<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
    integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Random Companies</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <x-style />

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class=" fixed top-0 right-0 px-6 mt-10 sm:block">
            @auth
                <p>Hello {{ auth()->user()->name }}!</p>
                <a href="/logout" class="text-sm text-gray-700 dark:text-gray-500 underline">Log out</a>
            @endauth
            @guest
                <a href="/login" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @if (Route::has('register'))
                    <a href="/register" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Sign
                        Up</a>
                @endif
            @endguest

        </div>


        <div class="max-w-6xl w-5/6 mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between pt-8 sm:pt-0">
                <a href='/' class="text-3xl mt-10 font-extrabold text-blue-600">Random Companies Website SRL</a>
                @admin
                <div class="text-xl flex mt-10 font-extrabold text-blue-600">
                    <div class="flex flex-col mr-6">
                        <a href='/admin/employees/create' class="">Create an Employee</a>
                        <a href='/admin/employees/' class="text-sm mt-2 mr-5">Employees index</a>
                    </div>
                    <div class="flex flex-col">
                        <a href='/admin/companies/create' class="mr-5">Create a Company</a>
                    </div>
                </div>
                @endadmin
            </div>
