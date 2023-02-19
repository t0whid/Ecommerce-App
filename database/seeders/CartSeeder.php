<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $table->id();
        $table->integer('product_id');
        $table->integer('user_id');
        $table->timestamps();
        */
        DB::table('carts')->insert([
            [
                "product_id" => 5,
                "user_id" => 5
            ]
        ]);
    }
}
