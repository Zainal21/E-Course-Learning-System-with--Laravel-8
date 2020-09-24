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
                'slug'=> 'belajar-Javascript-Dasar'
            ]
        );
        
    }
}
