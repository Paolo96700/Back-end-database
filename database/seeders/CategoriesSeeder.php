<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->getFileCsv();
    }

    private function getFileCsv(){
        $csvFile = fopen(base_path("database/csv/categories.csv"), "r");

        $firstline = true;
        while(($data = fgetcsv($csvFile, 1000, ",")) !== FALSE){
            if(!$firstline){
                DB::table('categories')->insert([
                    "id"  => $data[0],
                    "name" => $data[1],
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
    
}
