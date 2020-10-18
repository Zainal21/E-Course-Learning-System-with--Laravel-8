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
                'harga' => 20000, 
                'tipe_kelas' => 1,
                'level'=> 'pemula',
                'slug'=> 'belajar-Javascript-Dasar'
            ]
        );
        kelas::create(
            [
                'nama_kelas' => 'belajar Typestrip Dasar', 
                'deskripsi'=> 'test', 
                'thumbnail' => 'test.jpg', 
                'harga' => 20000, 
                'tipe_kelas' => 0,
                'level'=> 'pemula',
                'slug'=> 'belajar-Javascript-Dasar'
            ]
        );
        
    }
}
