<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kelas;
class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kelas::create(
            [
                'nama_kelas' => 'belajar Javascript Dasar', 
                'deskripsi'=> 'test', 
                'thumbnail' => 'test.jpg', 
                'level'=> 'pemula',
                'harga' => 1000,
                'slug'=> 'belajar-Javascript-Dasar'
            ]
        );
        kelas::create(
            [
                'nama_kelas' => 'belajar Typestrip Dasar', 
                'deskripsi'=> 'test', 
                'thumbnail' => 'test.jpg', 
                'harga' => 1000,
                'level'=> 'pemula',
                'slug'=> 'belajar-Javascript-Dasar'
            ]
        );
        
    }
}
