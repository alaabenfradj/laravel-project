<x-layout>
    <x-card class="p-10">

        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Events
            </h1>

        </header>
        <div class="p-10 border-gray-300 text-center">
            <h2>
                <a href="/backoffice/events/create"
                    class="hover:text-laravel text-blue-800 font-bold my-6 uppercase ">Post Event</a>
            </h2>
        </div>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($events->isEmpty())
                    @foreach ($events as $event)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/events/{{ $event->id }}"> {{ $event->title }} </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/backoffice/events/{{ $event->id }}/edit"
                                    class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form method="POST" action="/backoffice/events/{{ $event->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">No events Found</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>
