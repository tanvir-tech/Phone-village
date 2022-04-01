<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name'=>'Yellow Book',
                'description'=>'Best Book in Bangladesh',
                'category'=>'Book',
                'price'=>250,
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvC2WyxVQWvTLjQ_37kYGy7jjszxjRtS7M3Q&usqp=CAU',


            ]
            );
    }
}
