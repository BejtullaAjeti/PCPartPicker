<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpuCooler extends Model
{
    use HasFactory;

    protected $table='cpu_coolers';
    protected $primarykey ='id';
    protected $fillable = ['name', 'type', 'noise_level', 'fan_size','height', 'dimensions', 'price'];

    public function pc_parts()
    {
        return $this->hasMany(PcPart::class);
    }
}
