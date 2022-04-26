<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'Nokia Mobile',
                'price'=>'100',
                'description'=>'2gb smartphone',
                'category'=>'mobile',
                'gallery'=>'https://waltonbd.com/image/catalog/Mobile/2022/l30/L30_Gallery1.jpg'
            ],
            [
                'name'=>'infinix Mobile',
                'price'=>'50',
                'description'=>'4gb smartphone',
                'category'=>'mobile',
                'gallery'=>'https://waltonbd.com/image/catalog/Mobile/2021/L52/L52_Gallery1.jpg'
            ],
            [
                'name'=>'lula Mobile',
                'price'=>'300',
                'description'=>'1gb smartphone',
                'category'=>'mobile',
                'gallery'=>'https://waltonbd.com/image/catalog/Mobile/2021/MM25/MM25_Gallery03.jpg'
            ],
            [
                'name'=>'niga Mobile',
                'price'=>'1000',
                'description'=>'6gb smartphone',
                'category'=>'mobile',
                'gallery'=>'https://waltonbd.com/image/catalog/Mobile/2021/Olvio%20L2/L2_Gallery1.jpg'
            ],
        ]);
    }
}
