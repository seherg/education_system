<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ini_set('memory_limit', '-1');

        $this->call([
     
            RoleSeeder::class,
            AdminSeeder::class,
            Staffseeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            UserSeeder::class
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
