<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Send Reclamation
            </h2>
            <p class="mb-4">Post Reclamation</p>
        </header>

        <form action="/reclamations/manage" method="POST">
            @csrf
            <div class="mb-6">
                <label for="owner" class="inline-block text-lg mb-2">owner Name</label>
                <input type="text" value="{{ old('owner') }}" class="border border-gray-200 rounded p-2 w-full" name="owner" />
                @error('owner')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" value="{{ old('title') }}" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: TWIN Departement" />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Content</label>
                <textarea rows="10" type="text" value="{{ old('content') }}" class="border border-gray-200 rounded p-2 w-full" name="content" placeholder="Example: Remote, Boston MA, etc"></textarea>
                @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>





            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Reclamation
                </button>

                <a href="/reclamations/manage" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>