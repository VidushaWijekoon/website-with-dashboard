<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [
        'contact_us_messanger_fullname',
        'contact_us_title',
        'contact_us_subject',
        'contact_us_message'
    ];
}