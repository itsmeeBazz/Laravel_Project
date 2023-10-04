<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code'=>'0835',
            'name'=>'Yakult 1 pack',
            'price'=>12000
        ]);
        Product::create([
            'code'=>'9537',
            'name'=>'Indomie',
            'price'=>3000
        ]);
        Product::create([
            'code'=>'1092',
            'name'=>'Susu Bear  Brand',
            'price'=>9000
        ]);
        Product::create([
            'code'=>'0856',
            'name'=>'Silverquenn',
            'price'=>12000
        ]);
        Product::create([
            'code'=>'0888',
            'name'=>'KitKat',
            'price'=>23000
        ]);
    }
}