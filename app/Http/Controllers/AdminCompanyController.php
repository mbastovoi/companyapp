<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminCompanyController extends Controller
{
    public function create()
    {
        return view('admin.companies.create');
    }

    public function show()
    {
        return view('admin.companies.show', [
            'companies' => Company::all()
        ]);
    }

    public function store(Company $company)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' =>['required', Rule::unique('companies', 'slug')->ignore($company->id)],
            'website'=> 'required',
            'logo' => 'required|image',
            'description' => 'required'
        ]);

        $attributes['logo'] = request()->file('logo')->store('logos');

        Company::create($attributes);

        return redirect('/');
    }

    public function update(Company $company, Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' =>['required', Rule::unique('companies', 'slug')->ignore($company->id)],
            'website'=> 'required',
            'logo' => 'image|required',
            'description' => 'required'
        ]);


        $attributes['logo'] = request()->file('logo')->store('logos');


        $company->update($attributes);
        if ($request->hasFile('logo')) {
            return back()->with('Success', 'Company updated');
        } else {
            return "Please add a photo";
        }
    }


    public function destroy(Company $company)
    {
        $company->delete();

        return back()->with('Success', 'Company deleted');
    }
}
