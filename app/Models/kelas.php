<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'deskripsi', 'thumbnail', 'level' , 'slug'];


    public function materi_kelas()
    {
        return $this->hasMany(materi_kelas::class, 'kelas_id', 'id');
    }
    
    public function akses_kelas()
    {
        return $this->hasMany(kelas::class, 'kelas_id', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(kelas::class, 'kelas_id', 'id');
    }

}
