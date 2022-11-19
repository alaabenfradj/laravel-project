<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
            Edit {{ $reclamation->title }}
            </h2>
            <p class="mb-4">Edit Reclamation</p>
        </header>

        <form action="/reclamations/{{ $reclamation->id }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" value="{{ $reclamation->title }}" class="border border-gray-200 rounded p-2 w-full"
                    name="title" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Content</label>
                <textarea rows="10"type="text"  class="border border-gray-200 rounded p-2 w-full"
                    name="content"  >{{ $reclamation->content }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Edit Reclamation
                </button>

                <a href="/reclamations/manage" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
