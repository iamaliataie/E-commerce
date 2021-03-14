<?php

namespace Database\Seeders;

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
            [
                'name'=>'HUAWER P30 PRO',
                'description'=>'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain',
                'category'=>'MOBILE',
                'price'=>'$700',
                'gallery'=>'https://inteng-storage.s3.amazonaws.com/images/MARCH/sizes/HuaweiP30_resize_md.jpg'
            ],
            
        ]);
    }
}
