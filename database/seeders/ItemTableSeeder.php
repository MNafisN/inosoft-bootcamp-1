<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jumlah = 100;

        for ($a=0; $a<$jumlah; $a++) 
        {
            DB::table('item')->insert([
                'item_name'=>Str::random(25),
                'item_type'=>Str::random(10),
                'item_price'=>rand(10000,100000),
                'item_desc'=>Str::random(50),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
