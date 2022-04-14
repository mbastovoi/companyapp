<x-header />
</head>



<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">


        @foreach ($companies as $company)
            <x-company-card :company="$company" />
        @endforeach

    </div>
    {{ $companies->links() }}
</div>

<x-footer />
