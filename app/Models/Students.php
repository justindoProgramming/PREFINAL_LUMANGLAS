<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'student_id',
        'fullname',
        'course',
        'email',
        'contact_number',
    ];
}
