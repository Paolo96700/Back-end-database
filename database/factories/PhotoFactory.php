<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'user_id'         => rand(1, 3),
            'title'           => $this->generatePhotoTitle(),
            'image'           => fake()->imageUrl(),
            'description'     => fake()->text(),
            'visible'         => fake()->boolean(false),
            'created_at'      => now(),
            'updated_at'      => now(),
        ];
    }

    private function generatePhotoTitle()
    {   
        //avendo tre array di differente tipologia
        $keywords = ['panorama', 'orizzonte', 'natura', 'vista', 'viaggio', 'avventura', 'esplorazione', 'emozione', 'tramonto', 'alba', 'magia', 'fantasia', 'sogno'];
        $adjectives = ['incantevole', 'suggestivo', 'meraviglioso', 'mozzafiato', 'emozionante', 'affascinante', 'pittoresco', 'spettacolare', 'unica', 'magico', 'strabiliante', 'accattivante', 'sorprendente'];
        $places = ['Monte Bianco', 'spiaggia di Waikiki', 'Torre Eiffel', 'Valle della Luna', 'Grand Canyon', 'Giardini di Kyoto', 'Cascate del Niagara', 'Grande Muraglia Cinese', 'Santorini', 'Machu Picchu'];

        // Sceglie una parola chiave, un aggettivo e un luogo a caso per creare il titolo
        $keyword = $keywords[array_rand($keywords)];
        $adjective = $adjectives[array_rand($adjectives)];
        $place = $places[array_rand($places)];

        // li unisce insieme
        return ucfirst("$adjective $keyword, $place");
    }
}
