<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($events) == 0)
            @foreach ($events as $event)
                <x-event-card :event="$event"></x-event-card>
            @endforeach
        @else
            <p>no events available !</p>
        @endunless

    </div>
    <div class="mt-6 p-4">
        {{ $events->links() }}
    </div>
</x-layout>
