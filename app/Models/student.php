<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class student extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable =[
        'studnet_name',
        'studnet_email ',
        'studnet_phone',
        'studnet_course_enrolls',
        'studnet_db'
    ];

}
