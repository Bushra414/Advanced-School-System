<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'SID';
    protected $fillable = [
        'fullname',
        'date_of_birth',
        'gender',
        'phone_number',
        'father_name',
        'mother_name',
        'parents_phone_number',
        'class'
    ];
    use HasFactory;
}
