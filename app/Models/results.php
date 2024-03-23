<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    protected $fillable = ['SID', 'SubID', 'marks'];
    protected $table = 'marks';
    protected $primaryKey = 'MID';
    use HasFactory;
}
