<?php

namespace App\Models;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    /** @use HasFactory<\Database\Factories\WilayahFactory> */
    use HasFactory;

    protected $fillable = [
        'rt',
        'rw',
        'dusun',
    ];

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class);
    }
}