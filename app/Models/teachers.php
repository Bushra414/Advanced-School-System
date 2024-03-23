<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'TID';
    protected $fillable = ['full_name', 'date_of_birth', 'phone_number', 'email', 'class'];
    use HasFactory;
}
