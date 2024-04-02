<?php

use App\Models\Photo;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('photos', function(){
    $photos = Photo::all('id', 'title', 'visible', 'user_id');
    $this->table(['ID', 'Titolo', 'Visibilità', 'Fotografo'], $photos->toArray());
})->purpose('Command that you can all photos');