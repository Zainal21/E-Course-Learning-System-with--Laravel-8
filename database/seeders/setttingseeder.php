<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\setting;
class setttingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting::create([
           'Nama_website' => 'test',
           'tagline' =>'test',
           'alamat' => 'test',
           'kode_analitic' => 'test',
           'deskripsi' => 'test',
        ]);
    }
}
