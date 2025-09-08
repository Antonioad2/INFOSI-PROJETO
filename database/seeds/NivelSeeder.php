<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivels')->updateOrInsert(
            ['nome' => 'admin'],
            ['created_at' => now(), 'updated_at' => now()]
        );

        DB::table('nivels')->updateOrInsert(
            ['nome' => 'user'],
            ['created_at' => now(), 'updated_at' => now()]
        );
    }
}
