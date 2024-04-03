<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
   public function run(){
        $users = config('users');

        foreach($users as $arrUsers){
            $user = User::create([
                "name"         => $arrUsers['name'],
                "email"        => $arrUsers['email'],
                "password"     => $arrUsers['password'],
            ]);
            $user->roles()->sync($arrUsers['roles']);
        }
   }
}
