<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create an Forum
            </h2>
            <p class="mb-4">Post Forum</p>
        </header>

        <form action="/forums" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" value="{{ old('title') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="title" placeholder="" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="designedTo" class="inline-block text-lg mb-2">Designed To</label>
                <select value="{{ old('designedTo') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="designedTo">
                    <option value="Teachers">Teachers </option>
                    <option value="Students">Students </option>
                    <option value="Parents"> Parents</option>
                </select>
                @error('designedTo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="maxPresent" class="inline-block text-lg mb-2">Maximum number of present</label>
                <input type="number" value="{{ old('maxPresent') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="maxPresent"  />
                @error('maxPresent')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="date" class="inline-block text-lg mb-2">
                    Date
                </label>
                <input type="date" value="{{ old('date') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="date" />
                @error('date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" value="{{ old('tags') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="tags"  />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    Forum Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Forum Description
                </label>
                <textarea value="{{ old('description') }}" class="border border-gray-200 rounded p-2 w-full" name="description"
                    rows="10" placeholder="Include tasks, requirements, salary, etc"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Forum
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
