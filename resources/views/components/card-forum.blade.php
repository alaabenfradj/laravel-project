@props(['forum'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $forum->image ? asset('storage/' . $forum->image) : asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/forums/{{ $forum['id'] }}">{{ $forum['title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $forum->maxPresent }}</div>
            <x-forum-tags :tags="$forum->tags" />
            <div class="text-lg mt-4">
                <i class="fa fa-calendar"></i> {{ $forum->date }}
            </div>
        </div>
    </div>
</x-card>
