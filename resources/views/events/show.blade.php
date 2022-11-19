<x-layout>
    <a href="/events" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 ">
            <div class="flex flex-col items-center justify-center text-center">
                @php
                    $check = in_array(
                        auth()->id(),
                        $event
                            ->participants()
                            ->pluck('id')
                            ->toArray(),
                    );
                @endphp
                @unless($check == true)
                    <form action="/participate/{{ $event->id }}" method="POST">
                        @csrf
                        <button class="text-green-500 ml-5 "><i class="fa-solid fa-plus"></i>Part</button>
                    </form>
                @else
                    <h3 class="text-2xl mb-2">you're already a participant</h3>
                @endunless

                <img class="w-48 mr-6 mb-6"
                    src="{{ $event->logo ? asset('/storage/app/public/logos/' . $event->logo) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $event->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $event->owner }}</div>

                <x-event-tags :tags="$event->tags" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>{{ $event->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        {{ $event->description }}
                    </h3>

                </div>
            </div>
        </x-card>
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @unless(count($comments) == 0)
                <ul>
                    @foreach ($comments as $comment)
                        <li>
                            <x-card class="p-5 rounded max-w-lg mx-auto flex mt-5">
                                <header class="text-center">
                                    <h4 class="text-2xl font-bold uppercase mb-1">
                                        @php
                                            $username = App\Http\Controllers\CommentController::userName($comment->user_id);
                                        @endphp
                                        {{ $username }}
                                    </h4>
                                    <p class="mb-4">{{ $comment->content }}</p>
                                </header>
                                @unless($comment->user_id != auth()->id())
                                    <form action="/delete/{{ $comment->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 ml-5 "><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                @else
                                    <button class="text-teal-500 ml-5 "><i class="fa-solid fa-save"></i></button>
                                @endunless
                            </x-card>
                        </li>
                    @endforeach
                </ul>
            @else
                <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            there is no comments at this moment
                        </h2>
                        <p class="mb-4">Post Comment below</p>
                    </header>
                </x-card>
            @endunless
        </div>
        @auth
            <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Add a comment to this event
                    </h2>
                    <p class="mb-4">Post Comment</p>
                </header>

                <form action="/events/{{ $event->id }}/comments/" method="POST">
                    @csrf
                    @method('POST')
                    <div class="p-5 rounded max-w-lg mx-auto flex mt-5">

                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="content"
                            placeholder="Example: Senior Laravel Developer" />
                        <button class="text-teal-500 ml-5 "><i class="fa-solid fa-save"></i></button>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
            </x-card>
        @endauth


    </div>

</x-layout>
