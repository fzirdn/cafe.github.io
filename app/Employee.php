<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = "employee_details";

    protected $fillable = [
        'empName', 'empEmail', 'empIC', 'empPhone', 'empAddress', 'position'
    ];
}
