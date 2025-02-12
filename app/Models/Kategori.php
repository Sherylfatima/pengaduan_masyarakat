<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori'
    ];

    protected $table = 'kategoris';

    // Relasi ke table pengaduan
    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'kategori_id', 'id');
    }
}
