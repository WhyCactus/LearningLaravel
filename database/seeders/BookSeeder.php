<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(30),
                'thumbnail' => fake()->imageUrl(),
                'author' => fake()->name('male'),
                'publicsher' => fake()->company(),
                'publication' => fake()->dateTime(''),
                'price' => fake()->randomFloat(2,5,50),
                'quantity'=> fake()->randomFloat(2,5,50),
                'category_id' => rand(1, 5)
            ]);
        }
    }
}
