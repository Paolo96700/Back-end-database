<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $this->getFileCsv();
    }
    
    private function getFileCsv(){
        $csvFile = fopen(base_path("database/csv/users.csv"), "r");

        $firstline = true;
        while(($data = fgetcsv($csvFile, 1000, ",")) !== FALSE){
            if(!$firstline){
                DB::table('users')->insert([
                    "name" => $data[0],
                    "email" => $data[0],
                    "password" => $data[0],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
