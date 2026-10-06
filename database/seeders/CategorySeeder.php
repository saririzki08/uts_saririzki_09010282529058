<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run(): void {
        Category::insert([
            ['name' => 'Teknologi & Ilmu Komputer', 'description' => 'Buku seputar pemrograman, jaringan, dan AI'],
            ['name' => 'Novel & Sastra', 'description' => 'Buku fiksi, novel, dan karya sastra'],
            ['name' => 'Bisnis & Ekonomi', 'description' => 'Buku manajemen dan kewirausahaan'],
        ]);
    }
}