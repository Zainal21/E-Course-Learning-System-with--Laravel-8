<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\materi_kelas;

class MateriKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        materi_kelas::create(
            [
            'kelas_id' => 1,
            'nama_materi' => 'perkenalan',
            'link_materi' => 'https:facebook.com'
            ]
        );
    }
}
