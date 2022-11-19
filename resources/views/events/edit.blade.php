<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit {{ $event->title }}
            </h2>
            <p class="mb-4">Edit Event</p>
        </header>

        <form action="/backoffice/events/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" value="{{ $event->title }}" class="border border-gray-200 rounded p-2 w-full"
                    name="title" placeholder="Example: Senior Laravel Developer" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" value="{{ $event->location }}" class="border border-gray-200 rounded p-2 w-full"
                    name="location" placeholder="Example: Remote, Boston MA, etc" />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" value="{{ $event->tags }}" class="border border-gray-200 rounded p-2 w-full"
                    name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="start_date" class="inline-block text-lg mb-2">
                    Start Date
                </label>
                <input type="date" value="{{ $event->start_date }}" id="start_date"
                    class="border border-gray-200 rounded p-2 w-full" name="start_date" />
                @error('start_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="end_date" class="inline-block text-lg mb-2">
                    Start Date
                </label>
                <input type="date" value="{{ $event->end_date }} id="end_date"
                    class="border border-gray-200 rounded p-2 w-full" name="end_date" />
                @error('end_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Event Logo
                </label>
                <img class="w-48 mr-6 mb-6"
                    src="{{ $event->logo ? asset('/storage/app/public/' . $event->logo) : asset('images/no-image.png') }}"
                    alt="" />
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Event Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ $event->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    edit Event
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
