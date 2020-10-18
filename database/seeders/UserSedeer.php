<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Admin', 
           'email' => 'admin@admin.com', 
           'password' => bcrypt('password'),
           'role' => 'admin',
           'ispremium' =>1
        ]);
            
        User::create([
            'name' => 'user', 
            'email' => 'user@user.com', 
            'password' => bcrypt('password'),
            'role' => 'user',
            'ispremium' =>0
         ]);

         User::create([
            'name' => 'Admin2', 
            'email' => 'admin@user.com', 
            'password' => bcrypt('password'),
            'role' => 'admin',
            'ispremium' =>1
         ]);
             
         User::create([
             'name' => 'user2', 
             'email' => 'user@admin.com', 
             'password' => bcrypt('password'),
             'role' => 'user',
             'ispremium' =>1
          ]);
    }
}
