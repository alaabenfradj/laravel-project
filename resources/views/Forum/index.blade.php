<x-layout>
    @include('partials._hero')
    @include('partials._search-forums')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($forums) == 0)
            @foreach ($forums as $forum)
                <x-card-forum :forum="$forum"></x-card-forum>
            @endforeach
        @else
            <p>no forums available !</p>
        @endunless

    </div>
    <div class="mt-6 p-4">
        {{ $forums->links() }}
    </div>
</x-layout>
