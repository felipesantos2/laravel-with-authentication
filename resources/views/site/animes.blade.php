<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Animes') }}
        </h2>
    </x-slot>
    <div class="max-w-full w-3/4 mx-auto">
        @foreach ($animes as $anime)
            <span class="text-white font-semibold">
                {{ $anime }}
                |
            </span>
            <a href="{{ route('animes.edit', ['anime' => $anime])}}" class="text-green font-semibold"> Editar </a>
            <br>
        @endforeach
    </div>
</x-app-layout>
