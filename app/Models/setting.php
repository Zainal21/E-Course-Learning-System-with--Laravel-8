<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable = [
        'Nama_website',
        'tagline',
        'alamat',
        'kode_analitic',
        'deskripsi'
    ];
}
