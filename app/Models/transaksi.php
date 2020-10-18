<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['kelas_id', 'user_id', 'total_transaksi', 'status', 'photo'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'kelas_id', 'id');
    }
}
