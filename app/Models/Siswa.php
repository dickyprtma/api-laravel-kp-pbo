<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = ['id']; 
    use HasFactory;
    public $timestamps = false;
    var $table = "siswa";
}
