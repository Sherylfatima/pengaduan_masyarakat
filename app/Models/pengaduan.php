<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'kategori_id', 'isi_laporan', 'foto', 'status'];
    protected $table = 'pengaduans';

    //Nilai balik relasi ke table kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
