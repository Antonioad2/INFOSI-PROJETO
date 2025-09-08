<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Nivel;

class NivelSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivels')->insert([
            'nome' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Nivel::create([
            'nome' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
