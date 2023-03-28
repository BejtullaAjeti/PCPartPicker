<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    use HasFactory;

    protected $table = 'gpus';
    protected $primaryKey = 'id';
    protected $fillable = ['brand','name', 'core_clock', 'boost_clock' , 'memory', 'memory_type','memory_clock','interface', 'price'];
}
