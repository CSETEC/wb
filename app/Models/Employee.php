<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'joining_date',
        'salary',
        'email',
        'mobile_no',
        'address'
    ];
}
