<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            'admin',
            'staff',
            'teacher',
            'student',
            
        ];
        foreach($roles as $role){
            Role::create([
                'name' => $role,
            ]);
        }
    }
}
