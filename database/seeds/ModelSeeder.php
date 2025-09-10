<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('models')->delete();

        DB::table('models')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Corolla',
                'description' => 'corolla',
                'date' => '2025-09-08',
                'brand_id' => 3,
                'created_at' => '2025-09-08 12:09:55',
                'updated_at' => '2025-09-08 12:09:55',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'i10',
                'description' => 'i10',
                'date' => '2025-09-08',
                'brand_id' => 2,
                'created_at' => '2025-09-08 12:10:20',
                'updated_at' => '2025-09-08 12:10:20',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Alto',
                'description' => 'alto',
                'date' => '2025-09-08',
                'brand_id' => 4,
                'created_at' => '2025-09-08 12:10:40',
                'updated_at' => '2025-09-08 12:10:40',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Spresso',
                'description' => 'spresso',
                'date' => '2025-09-08',
                'brand_id' => 4,
                'created_at' => '2025-09-08 12:11:08',
                'updated_at' => '2025-09-08 12:11:08',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Santa Fé',
                'description' => 'santa fé',
                'date' => '2025-09-08',
                'brand_id' => 2,
                'created_at' => '2025-09-08 12:12:22',
                'updated_at' => '2025-09-08 12:12:22',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Starlet',
                'description' => 'starlet',
                'date' => '2025-09-08',
                'brand_id' => 3,
                'created_at' => '2025-09-08 12:12:44',
                'updated_at' => '2025-09-08 12:12:44',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'T2',
                'description' => 't2',
                'date' => '2025-09-08',
                'brand_id' => 5,
                'created_at' => '2025-09-08 12:13:04',
                'updated_at' => '2025-09-08 12:13:04',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Picanto',
                'description' => 'picanto',
                'date' => '2025-09-08',
                'brand_id' => 1,
                'created_at' => '2025-09-08 12:13:29',
                'updated_at' => '2025-09-08 12:13:29',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Duster',
                'description' => 'duster',
                'date' => '2025-09-09',
                'brand_id' => 7,
                'created_at' => '2025-09-09 12:44:25',
                'updated_at' => '2025-09-09 12:44:25',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Land Cruiser',
                'description' => 'land cruiser',
                'date' => '2025-09-09',
                'brand_id' => 3,
                'created_at' => '2025-09-09 12:45:07',
                'updated_at' => '2025-09-09 12:45:07',
                'deleted_at' => NULL,
            ),
        ));


    }
}
