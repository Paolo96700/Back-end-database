<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotosSeeder extends Seeder
{
    public function run(): void
    {
        Photo::factory()->count(1000)->create();
    }
}
