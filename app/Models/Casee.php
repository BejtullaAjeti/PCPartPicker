<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casee extends Model
{
    use HasFactory;

    protected $table = 'casees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'type', 'color', 'material', 'dimensions' , 'price'];

}
