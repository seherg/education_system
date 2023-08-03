<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'identity_number'   => '11111111111',
            'name'              => 'Ali',
            'surname'           => 'Gumus',
            'phone_number'      => '5555555555',
            'email'             => 'ali@gmail.com',
            'password'          => Hash::make('malatya'),
            'gender'            => 'male',
            'birth_date'        => '2000-12-06',
            'address'           => 'Malatya',
            'is_active'         => False
        ]);
    }
}
