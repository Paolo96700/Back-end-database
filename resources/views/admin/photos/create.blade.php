<x-app-layout>
    <div class="container text-white m-auto">
       
       


        <form 
            method="POST" 
            action="{{ route('admin.photos.store') }}" 
            enctype="multipart/form-data"  
            novalidate
            class="max-w-7xl mx-auto"
        >   
            {{-- Per protezione dati --}}
            @csrf 
            {{-- Per protezione dati --}}
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Photo title
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title')}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light
                    @error('title') is-invalid @enderror" 
                    placeholder="inserisci qui in titolo della tua foto" 
                />
                <div class="invalid-feedback">
                    @error('title') {{ $message }} @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Photo image
                </label>
                <input 
                    type="text" 
                    id="image" 
                    name="image" 
                    value="{{ old('image')}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light
                    @error('image') is-invalid @enderror" 
                    placeholder="inserisci qui l'immagine della tua foto" 
                />
                <div class="invalid-feedback">
                    @error('image') {{ $message }} @enderror
                </div>
            </div>
            <label for="category" class="form-label"style="font-weight:700; font-size:20px">
                Categories
            </label>
            <div class="flex flex-wrap gap-1 justify-center">
                @foreach($categories as $category)
                    <div class="mb-3" style="width: 9rem">
                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="category{{ $category->id }}"
                                name="categories[]"
                                value="{{ $category->id }}"
                                @if (in_array($category->id, old('categories') ?: [])) checked @endif
                            >
                            <label class="form-check-label" for="category{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mb-5">
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
              <textarea 
                        id="description" 
                        name="description"
                        rows="4" 
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('description') is-invalid @enderror" 
                        placeholder="Add description...">{{ old('description')}}</textarea>
              <div class="invalid-feedback">
                    @error('description') {{ $message }} @enderror
                </div>
            </div>
            <div class="flex items-start mb-5">
              <div class="flex items-center h-5">
                <input id="visible" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
              </div>
              <label for="visible" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visible</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create
            </button>
          </form>
          
  
    </div>
</x-app-layout>