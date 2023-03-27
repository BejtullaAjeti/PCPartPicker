<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;

    protected $table = 'cpus';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'cores', 'threads', 'clock_speed' , 'socket', 'price'];

  
}
