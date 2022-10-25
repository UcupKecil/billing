<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Makanan',
            'created_at' =>date('Y-m-d H:i:s'),
        ]);

        DB::table('product_categories')->insert([
            'name'          => 'Minuman',
            'created_at'    =>date('Y-m-d H:i:s'),
        ]);

        DB::table('product_categories')->insert([
            'name'          => 'Narkoba',
            'created_at'    =>date('Y-m-d H:i:s'),
        ]);
    }
}
