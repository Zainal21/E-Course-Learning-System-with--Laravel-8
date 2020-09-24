<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi_kelas extends Model
{
    use HasFactory;
    protected $table = 'materi_kelas';
    protected $fillable = ['kelas_id','nama_materi','link_materi'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }
}
