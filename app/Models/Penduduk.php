<?php

namespace App\Models;

use App\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukFactory> */
    use HasFactory;

    // protected $table = 'penduduk'; -> not needed as Laravel uses plural form of model name by default
    // code dibawah ini untuk mengisi kolom yang bisa diisi
    protected $table = 'penduduks'; // Specify the table name if it differs from the pluralized model name
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'wilayah_id',
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
}
