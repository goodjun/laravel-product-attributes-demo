<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => '麦当劳',
            ], [
                'id' => 2,
                'name' => '肯德基',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => '牛肉',
            ], [
                'id' => 2,
                'name' => '鸡肉',
            ], [
                'id' => 3,
                'name' => '羊肉',
            ], [
                'id' => 4,
                'name' => '大虾',
            ], [
                'id' => 5,
                'name' => '北极贝',
            ],
        ]);

        DB::table('attributes')->insert([
            [
                'id' => 1,
                'name' => 'Units',
            ], [
                'id' => 2,
                'name' => 'Colors',
            ],
        ]);

        DB::table('attribute_options')->insert([
            [
                'id' => 1,
                'attribute_id' => 1,
                'name' => 'CS',
            ], [
                'id' => 2,
                'attribute_id' => 1,
                'name' => 'PC',
            ], [
                'id' => 3,
                'attribute_id' => 2,
                'name' => 'L',
            ], [
                'id' => 4,
                'attribute_id' => 2,
                'name' => 'M',
            ], [
                'id' => 5,
                'attribute_id' => 2,
                'name' => 'S',
            ], [
                'id' => 6,
                'attribute_id' => 2,
                'name' => 'XS',
            ],
        ]);

        DB::table('customer_products')->insert([
            [
                'customer_id' => 1,
                'product_id' => 1,
            ], [
                'customer_id' => 1,
                'product_id' => 2,
            ], [
                'customer_id' => 1,
                'product_id' => 3,
            ], [
                'customer_id' => 1,
                'product_id' => 4,
            ], [
                'customer_id' => 2,
                'product_id' => 1,
            ], [
                'customer_id' => 2,
                'product_id' => 2,
            ],
        ]);

        DB::table('customer_product_attributes')->insert([
            [
                'customer_id' => 1,
                'product_id' => 1,
                'attribute_option_id' => 1,
            ], [
                'customer_id' => 1,
                'product_id' => 1,
                'attribute_option_id' => 2,
            ], [
                'customer_id' => 1,
                'product_id' => 1,
                'attribute_option_id' => 3,
            ], [
                'customer_id' => 1,
                'product_id' => 1,
                'attribute_option_id' => 4,
            ], [
                'customer_id' => 2,
                'product_id' => 1,
                'attribute_option_id' => 1,
            ], [
                'customer_id' => 2,
                'product_id' => 1,
                'attribute_option_id' => 2,
            ],
        ]);
    }
}
