<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role_id'     => 1,
                'user_id'     => 101010,
                'email'       => 'shrgumusay@gmail.com',
                'password'    => 'malatya',
                'is_active'   => True  
            ],
            [
                'role_id'     => 2,
                'user_id'     => 202020,
                'email'       => 'omer@gmail.com',
                'password'    => 'adana',
                'is_active'   => True  
            ],
            [
                'role_id'     => 3,
                'user_id'     => 303030,
                'email'       => 'ayse@gmail.com',
                'password'    => 'malatya',
                'is_active'   => False  
            ],
            [
                'role_id'     => 4,
                'user_id'     => 404040,
                'email'       => 'ali@gmail.com',
                'password'    => 'malatya',
                'is_active'   => False
            ], 
        
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
