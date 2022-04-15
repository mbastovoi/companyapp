<div class="p-6 border-t border-gray-200 dark:border-gray-700 flex flex-col">
    <div class="flex justify-between">
        <div class="flex logo-wrapper">
        <img class="rounded-xl w-24" src="{{ str_contains($company->logo, 'pravatar') ? $company->logo : asset('storage/' . $company->logo) }}" alt="">
        <div class="ml-4 text-xl leading-7 font-semibold"><a href="{{$company->website}}"
                class="underline dark:text-white text-blue-600">{{ $company->name }}</a></div>
        </div>
        @admin
        <form action="/admin/companies/{{$company->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-md dark:text-white text-blue-600">Delete</button>
        </form>
        @endadmin


    </div>

    <div class="ml-4">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            {{ $company->description }}
        </div>
    </div>
    @auth
        @if (isset($company->employees[0]))
            <h4 class="ml-4 mt-2 text-lg font-semibold">
                Employees:
            </h4>
            <div class="ml-4 text-sm mb-4 mt-2">
                @foreach ($company->employees as $employee)
                    <h2 class="">{{ $employee->first_name }}</h2>
                @endforeach
            </div>
        @else
            <p class="ml-4 mt-2 text-lg font-semibold">Currently no Employees</p>
        @endif
    @endauth
    <div  class="font-extrabold items-end flex mb-3 flex-grow" x-data="{ open: false }">
        <button  class="ml-4 mt-4 bg-blue-600 h-8 w-20 text-white text-center rounded-xl  " x-on:click="open = ! open"}>Edit</button>
        <div  x-transition x-show="open" style="display:none" class="edit-form">
            <form class="mx-auto w-1/2 text-center" method="POST" action="/admin/companies/{{$company->id}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div @click.away="open = false" class="text-black modal-form fixed bg-red-400 rounded-xl flex-col align-center register-input">
                    <p>Edit the existing company</p>
                    <x-form.input name="name" type="text" value="{{$company->name}}" />
                    <x-form.input name="slug" type="text" value="{{$company->slug}}" />
                    <x-form.input name="description" type="text" value="{{$company->description}}"/>
                    <x-form.input name="website" type="text" value="{{$company->website}}"/>
                    <div>
                        <x-form.input name="logo" type="file" value="{{asset('storage/' . $company->logo) }}"/>
                        <p class=" m-0 text-xs">Please add a new Photo</p>
                    </div>


                    <button class="bg-blue-600 mt-10 p-4 block m-auto rounded-xl px-10" type='submit'>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
