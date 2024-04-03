<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    
    public function run(): void
    {
        Role::factory()->create([
            'name' => 'SUPERADMIN',
        ]);

        Role::factory()->create([
            'name' => 'ADMIN',
        ]);
        
        Role::factory()->create([
            'name' => 'USER',
        ]);
     
    }

    
}
