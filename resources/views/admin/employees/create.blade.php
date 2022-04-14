<x-header />


<h2 class="text-xl text-red-600 mt-10 text-center">Add a new Employee</h2>

<form class="mx-auto w-1/2" method="POST" action="/admin/employee/create" enctype="multipart/form-data">
    @csrf
    <div class="flex-col align-center register-input">
        <x-form.input name="first_name" type="text" />
        <x-form.input name="last_name" type="text" />
        <x-form.input name="email" type="email" />
        <x-form.input name="phone" type="text" />
        <div class="text-center flex-col flex p-4 mt-10">
        <label for="company_id">Which company?</label>
            <select class="mt-4 p-4" name="company_id" id="">
                <option value=null>Currently Unemployed</option>
                @foreach ($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>


        <button class="bg-blue-200 mt-10 p-4 block m-auto rounded-xl px-10" type='submit'>Submit</button>
    </div>
</form>

    <x-footer />
