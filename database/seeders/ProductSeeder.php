<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
            [
                'name'=>'mobile oppo',
                'price'=>'20,000',
                'category'=>'mobile',
                'description'=>'8gb ram, 256 rom, 8.6 screen, blue',
                'gallery'=>'https://images.app.goo.gl/5BAeM4PaR9aCyQt47'
            ],
        ]);
    }
}
