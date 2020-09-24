<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akses_kelas extends Model
{
    use HasFactory;

    protected $table = 'akses_kelas';
    protected $fillable = ['user_id', 'kelas_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }
}
