<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'CID';
    protected $fillable = ['class_name'];
    use HasFactory;
}
