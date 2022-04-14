<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminEmployeeController extends Controller
{
    public function create()
    {
        return view('admin.employees.create', [
            'companies' => Company::all()
        ]);
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', [
            'companies' => Company::all(),
            'employee' => $employee
        ]);
    }

    public function show()
    {
        return view('admin.employees.show', [
            'employees' => Employee::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required',
            'phone'=> 'required|numeric',
            'company_id' => 'required'
        ]);

        Employee::create($attributes);

        return redirect('/');
    }

    public function update(Employee $employee, Request $request)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required',
            'phone'=> 'required|numeric',
            'company_id' => 'required'
        ]);


        $employee->update($attributes);

        return redirect('/');
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back()->with('Success', 'Company deleted');
    }
}
