<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = "employee_payments";

    protected $fillable = [
        'day_id','empName', 'date', 'pay', 'bonus', 'total'
    ];
}
