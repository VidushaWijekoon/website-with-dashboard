<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'birthday',
        'gender',
        'visa_type',
        'visa_exipre_date',
        'contact',
        'image',
        'current_address',
        'join_date',
        'resident_country',
        'special_note',
        'department',
    ];
}