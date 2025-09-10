<?php 


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('brands')->delete();

        DB::table('brands')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kia',
                'image' => '1757333237_image.png',
                'description' => 'kia',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:07:17',
                'updated_at' => '2025-09-08 12:07:17',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Hyundai',
                'image' => '1757333263_image.png',
                'description' => 'hyundai',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:07:43',
                'updated_at' => '2025-09-08 12:07:43',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Toyota',
                'image' => '1757333287_image.png',
                'description' => 'toyota',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:08:07',
                'updated_at' => '2025-09-08 12:08:07',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Suzuki',
                'image' => '1757333313_image.png',
                'description' => 'suzuki',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:08:33',
                'updated_at' => '2025-09-08 12:08:33',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Jetour',
                'image' => '1757333348_image.png',
                'description' => 'jetour',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:09:08',
                'updated_at' => '2025-09-08 12:09:08',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'BMW',
                'image' => '1757333370_image.png',
                'description' => 'bmw',
                'date' => '2025-09-08',
                'created_at' => '2025-09-08 12:09:30',
                'updated_at' => '2025-09-08 12:09:30',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Renault',
                'image' => '1757421835_image.png',
                'description' => 'renault',
                'date' => '2025-09-09',
                'created_at' => '2025-09-09 12:43:55',
                'updated_at' => '2025-09-09 12:43:55',
                'deleted_at' => NULL,
            ),
        ));


    }
}
