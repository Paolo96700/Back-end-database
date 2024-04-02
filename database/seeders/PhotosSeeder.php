<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotosSeeder extends Seeder
{
    public function run(): void
    {
        $this->setPhotoAndCategories();
    }

    private function setPhotoAndCategories(){
        // inizializzo una variabile in cui abbiamo la crezione delle foto
        $photos = Photo::factory()->count(100)->create();

        // prende tutte le categorie
        $categories = Category::all();

        // Inizializzo il numero di categorie per photo
        $maxCategoriesforPhoto = 3;

        foreach ($photos as $photo) {
            // Inizializzo un numero casuale di categorie da assegnare alla foto
            $numCategories = rand(1, $maxCategoriesforPhoto);

            //seleziono categorie random da tutte quelle prese
            $selectCategories = $categories->random($numCategories);

            // Creare un array di ID delle categorie selezionate
            $categoryIds = $selectCategories->pluck('id')->toArray();

            // Assegnare le categorie selezionate alla foto
            $photo->categories()->attach($categoryIds);
        }

    }
}
