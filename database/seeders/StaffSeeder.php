<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name'            => 'Omer',
            'surname'         => 'Al',
            'phone_number'    => '5555555534',
            'email'           => 'omer@gmail.com',
            'password'        => Hash::make('adana'),
            'address'         => 'Adana',
            'is_active'       => True
        ]);
    }
}
