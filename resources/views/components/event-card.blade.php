@props(['event'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $event->logo ? asset('../../../storage/app/public/logos/' . $event->logo) : asset('images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/events/{{ $event['id'] }}">{{ $event['title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $event->owner }}</div>
            <x-event-tags :tags="$event->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $event->location }}
            </div>

        </div>
    </div>
</x-card>
