<x-header />

<h1 class="text-3xl mt-20 font-bold">Employees Index</h1>
<div class="mt-10">
		@foreach ($employees as $employee)
		<div class="flex">
			<div class="employee-wrapper w-4/5 bg-blue-200 p-12 mb-4 rounded-xl">
				<div class="flex">
					<h2 class="w-1/3"><b>{{$employee->first_name}} {{$employee->last_name}} </b></h2>
					@if ($employee->company())
					<p>Currently working at <b>{{$employee->company()}}</b></p>
					@else
					<p><b>Currently Looking for Job</b></p>
					@endif
				</div>
				<div class="flex">
					<h2 class="w-1/3">{{$employee->email}} </h2>
					<p>Can be called at {{$employee->phone}}</p>
				</div>
			</div>
			<div class="flex items-center mb-4 flex-grow flex-col justify-around">
				<form action="/admin/employees/{{$employee->id}}" method="POST">
						@method('DELETE')
						@csrf
						<button type="submit" class="bg-red-400 p-2 rounded-xl text-md dark:text-white font-bold text-blue-600">Delete</button>
				</form>
				<a class="bg-blue-200 p-2 rounded-xl text-md dark:text-white  font-bold text-blue-600" href="/admin/employees/edit/{{$employee->id}}">Edit</a>
			</div>
		</div>

		@endforeach
	</div>

<x-footer />