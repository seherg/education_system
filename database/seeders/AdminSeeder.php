<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'          => 'Seher',
            'surname'       => 'Gumusay',
            'phone_number'  => '05555555555',
            'email'         => 'shrgumusay@gmail.com',
            'password'      => Hash::make('malatya'),
            'address'       => 'Malatya',
            'is_active'     => True
        ]);
    }
}
