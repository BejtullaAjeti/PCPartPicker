<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;

    protected $table = 'cpus';
    protected $primaryKey = 'id';
    protected $fillable = ['brand','name','socket','cores', 'threads', 'base_clock','turbo' ,'ram_type','ram_speed','tdp','price'];


}
