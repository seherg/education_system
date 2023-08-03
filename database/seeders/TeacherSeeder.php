<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'identity_number' => '11111111111',
            'name'            => 'Ayşe',
            'surname'         => 'Ay',
            'phone_number'    => '5555555554',
            'email'           => 'ayse@gmail.com',
            'password'        => Hash::make('malatya'),
            'gender'          => 'male',
            'birth_date'      => '2000-05-05',
            'address'         => 'Malatya',
            'is_active'       => False
        ]);
    }
}
