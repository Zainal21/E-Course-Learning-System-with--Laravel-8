<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = [
        'author',
        'title',
        'isi',
        'thumbnail',
        'status',
        'slug'
    ];
}
