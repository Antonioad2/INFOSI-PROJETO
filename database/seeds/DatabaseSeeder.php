<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            NivelSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
        ]);
    }
}
