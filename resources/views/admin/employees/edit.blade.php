<x-header />


<h2 class="text-xl text-red-600 mt-10 text-center">Edit the Employee</h2>

<form class="mx-auto w-1/2" method="POST" action="/admin/employees/edit/{{$employee->id}}">
    @csrf
		@method('PATCH')
    <div class="flex-col align-center register-input">
        <x-form.input name="first_name" type="text" value="{{$employee->first_name}}" />
        <x-form.input name="last_name" type="text" value="{{$employee->last_name}}"/>
        <x-form.input name="email" type="email" value="{{$employee->email}}"/>
        <x-form.input name="phone" type="text" value="{{$employee->phone}}"/>
        <div class="text-center flex-col flex p-4 mt-10">
        <label for="company_id">Which company?</label>
            <select selected="{{$employee->company_id}}" class="mt-4 p-4" name="company_id" id="">
							<option value=null>Currently Unemployed</option>
								@foreach ($companies as $company)
                <option value="{{$company->id}}" {{($company->id === $employee->company_id) ? 'selected' :''}}>{{$company->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="bg-blue-200 mt-10 p-4 block m-auto rounded-xl px-10" type='submit'>Submit</button>
    </div>
</form>

    <x-footer />
