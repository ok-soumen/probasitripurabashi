<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'gender',
        'address',
        'country',
        'state',
        'district',
        'city',
        'pin',
        'current_address',
        'current_district',
        'current_city',
        'current_pin',
        'roots',
        'occupation',
        'nature_occupation',
        'industry_occupation',
        'last_visited',
        'reason_moving',
        'time_visit',
        'govt_should',
        'solve_existing',
        'things_refer_outside'

    ];
}
