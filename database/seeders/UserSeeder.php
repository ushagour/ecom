<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create an array of oject user 
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'utype'           => 'ADM',
                'profile_photo_path'=> '1.png',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$KjopsXqbCq1NrrGYJe7rr./68LzZSGCas5XxBHHbG.9AF4mc3GPR.'//(password)           
             ],
            [
                'id'             => 2,
                'name'           => 'user',
                'utype'           => 'USR',
                'profile_photo_path'=> '2.png',
                'email'          => 'user@user.com',
                'password'       => '$2y$10$KjopsXqbCq1NrrGYJe7rr./68LzZSGCas5XxBHHbG.9AF4mc3GPR.'//(password)           
             ]
        ];

        User::insert($users);
        
    }
}
