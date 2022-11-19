<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 ">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $forum->image ? asset('storage/' . $forum->image) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $forum->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $forum->owner }}</div>
                <div class="text-xl font-bold mb-4">{{ $forum->designedTo }}</div>
                <div class="text-xl font-bold mb-4">{{ $forum->date }}</div>
                <x-forum-tags :tags="$forum->tags" />
                <div class="text-lg my-4">
                 {{ $forum->maxPresent }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        forum Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>{{ $forum->description }}
                        </p>
                    </div>
                </div>
            </div>
        </x-card>
        @if(auth()->user()->id==$forum->user_id)
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/forums/{{ $forum->id }}/edit">
                <i class="fa-solid fa-pencil"> edit</i></a>
            <form method="POST" action="/forums/{{ $forum->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"> Delete</i></button>
            </form>
        </x-card>
        @endif
    </div>
</x-layout>
