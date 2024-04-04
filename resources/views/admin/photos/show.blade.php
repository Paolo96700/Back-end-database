<x-app-layout>
    <div class="container m-auto mt-8">
        <h2 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{$photo->title}}</h2>
        <img src="{{ asset($photo->image) }}" class="card-img-top rounded-lg" alt="..." style="width: 40%">
        <div class="mt-4">
            <p class="mb-3 text-lg text-gray-700 dark:text-gray-400">{{$photo->description}}</p>
        </div>
        <div class="my-2">
            <a href="{{ route('admin.photos.index') }}" class="inline-flex items-center px-8 py-2 text-lg text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                return to list  
            </a>
        </div>
    </div>
   
    
    
</x-app-layout>