<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(UserSedeer::class);
        $this->call(kelasSeeder::class);
        $this->call(MateriKelasSeeder::class);
        $this->call(setttingseeder::class);
    }
}
