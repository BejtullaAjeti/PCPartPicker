<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    use HasFactory;
    protected $table = 'motherboards';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'chipset', 'socket', 'form_factor', 'memory_slots', 'max_memory', 'pcie_slots', 'm2_slots', 'price'];
}