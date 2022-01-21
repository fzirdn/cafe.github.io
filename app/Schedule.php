<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $table = "employee_schedules";

    protected $fillable = [
        'emp_id','day_id','empName', 'date', 'position','start_time', 'off_time'
    ];
}
