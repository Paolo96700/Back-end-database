<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            
            'name'           => 'name',
            'created_at'      => now(),
            'updated_at'      => now(),

        ];
    }

}
