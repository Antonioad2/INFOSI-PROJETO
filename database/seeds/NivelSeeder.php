<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niveis')->insert([
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
