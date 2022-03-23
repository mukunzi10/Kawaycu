<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $fillable=[
        'fname',
        'lname',
        'email',
        'job_title',
        'city',
        'country'

    ];

}
