<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'deskripsi', 'level','thumbnail' , 'slug', 'harga'];


    public function materi_kelas()
    {
        return $this->hasMany(materi_kelas::class, 'kelas_id', 'id');
    }
    
    public function akses_kelas()
    {
        return $this->hasMany(akses_kelas::class, 'kelas_id', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'kelas_id', 'id');
    }

}
