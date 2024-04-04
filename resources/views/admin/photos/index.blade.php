<x-app-layout>
    <div class="container m-auto p-4 text-white">
        <h1 class="text-3xl font-bold mx-6 mb-6">Photo List</h1>
        <button type="button" class="ml-4 mb-4 px-8 py-2 font-semibold border rounded dark:border-gray-100 dark:text-gray-100 hover:bg-blue-700 hover:text-white hover:scale-105 duration-200">
            <a href="{{ route("admin.photos.create") }}">Create a new Photo</a>
        </button>
        <div class="flex flex-wrap justify-center items-center gap-2">
            @foreach ($photos as $photo)
                <div class=" bg-white border border-gray-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="width: 18rem;">
                    
                    <img src="{{ asset($photo->image) }}" class="card-img-top rounded-t-lg" alt="..." style="width: 100%; height:12rem">
                    
                    <div class="p-4">
                        <div style="height: 4rem">
                            <h6 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$photo->title}}</h6>
                        </div>
                        <div style="height: 8rem;">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$photo->description}}</p>
                        </div>
                    </div>
                    <div class="mx-4 my-2">
                        <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Details  
                        </a>
                    </div>
                </div>        
            @endforeach
        </div>
    </div>
</x-app-layout>