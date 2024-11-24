<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories_book")->insert([
            ['cate_name' => 'Trinh thám'],
            ['cate_name' => 'Tiểu thuyết'],
            ['cate_name' => 'Phiêu lưu'],
            ['cate_name' => 'Đời sống'],
            ['cate_name' => 'Học đường']
        ]);
    }
}
