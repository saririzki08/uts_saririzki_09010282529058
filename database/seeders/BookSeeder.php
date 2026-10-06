<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder {
    public function run(): void {
        Book::insert([
            ['category_id' => 1, 'title' => 'Pemrograman Laravel untuk Pemula', 'author' => 'Eko Kurniawan', 'publisher' => 'Media Kita', 'year' => 2023, 'stock' => 10],
            ['category_id' => 1, 'title' => 'Algoritma dan Struktur Data C++', 'author' => 'Budi Raharjo', 'publisher' => 'Informatika', 'year' => 2022, 'stock' => 8],
            ['category_id' => 2, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 15],
            ['category_id' => 2, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'publisher' => 'Lentera Dipantara', 'year' => 1980, 'stock' => 5],
            ['category_id' => 3, 'title' => 'Rich Dad Poor Dad', 'author' => 'Robert T. Kiyosaki', 'publisher' => 'Gramedia', 'year' => 2017, 'stock' => 12],
        ]);
    }
}