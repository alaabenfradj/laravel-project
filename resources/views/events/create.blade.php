<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create an Event
            </h2>
            <p class="mb-4">Post Event</p>
        </header>

        <form action="/backoffice/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" value="{{ old('title') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="title" placeholder="Example: Senior Laravel Developer" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Location</label>
                <input type="text" value="{{ old('location') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="location" placeholder="Example: Remote, Boston MA, etc" />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <label for="start_date" class="inline-block text-lg mb-2">
                    Start Date
                </label>
                <input type="date" value="{{ old('start_date') }}" id="start_date"
                    class="border border-gray-200 rounded p-2 w-full" name="start_date" />
                @error('start_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="end_date" class="inline-block text-lg mb-2">
                    Start Date
                </label>
                <input type="date" value="{{ old('end_date') }}" id="end_date"
                    class="border border-gray-200 rounded p-2 w-full" name="end_date" />
                @error('end_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" value="{{ old('tags') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Event Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Event Description
                </label>
                <textarea value="{{ old('description') }}" class="border border-gray-200 rounded p-2 w-full" name="description"
                    rows="10" placeholder="Include tasks, requirements, salary, etc"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Event
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
