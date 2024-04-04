<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class PhotoController extends Controller
{
    public function index()
    {
        
        // prendo l'ID dell'utente loggato
        $currentUserId = Auth::user()->id;
        // utilizzo l'ID dell'utente loggato per vedere solamente le sue foto sfruttando lo "user_id"
        $photos = Photo::where('user_id', $currentUserId)->get();

        return view('admin.photos.index', compact('photos'));
    }

    
    public function create()
    {
        $categories = Category::All();
        return view('admin.photos.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        // $request->validate();
        
        $data = $request->all();
        $currentUserId = Auth::user()->id;

        $newPhoto = new Photo();

        $newPhoto->user_id = $currentUserId;
        $newPhoto->title = $data['title'];
        $newPhoto->image = $data['image'];
        $newPhoto->description = $data['description'];
        $newPhoto->visible = $data['visible'] ?? false;

        $newPhoto->save();
        $newPhoto->categories()->sync($data['categories'] ?? []);

        return redirect()->route('admin.photos.show', ['photo' => $newPhoto]);
    }

    public function show(Photo $photo)
    {   
        $currentUser = Auth::user();

        if ($photo->user_id === $currentUser->id) {
            return view('admin.photos.show', compact('photo'));
        }
        else{
            return view('errors.error404');
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
