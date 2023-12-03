<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div class="max-w-full w-3/4 mx-auto p-2">
        <form action="{{route('animes.update', ['anime' => $anime->id])}}" anctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="_method" id="PUT">
            <input class="border-1 w-44 rounded-lg p-2 m-4" type="text" name="name" id="name" value="{{ $anime->name }}">
            <input class="border-1 w-36 rounded-lg p-2 m-4" type="file" name="image" id="image">
            <button type="submit" class="bg-orange-500 dark:bg-white">
                Salvar
            </button>
        </form>
    </div>
</x-app-layout>
