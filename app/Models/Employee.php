<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function company()
    {
        $company = Company::where('id', $this->company_id)->value('name');
        return $company;
    }
}
