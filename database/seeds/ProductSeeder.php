<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_category_id' => 1,
            'name' => 'Indomie Goreng',
            'price' => 3500,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'product_category_id' => 2,
            'name' => 'Nutrisari jeruk rasa Belimbing',
            'price' => 1000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'product_category_id' => 3,
            'name' => 'Jarum Coklat cap Badak Nyimeng',
            'price' => 35000000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
