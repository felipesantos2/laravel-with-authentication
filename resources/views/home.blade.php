<x-guest-layout>

    <div class="max-w-full w-3/4 mx-auto">
        <nav class="uppercase font-semibold flex justify-center gap-4">
            <a href="/animes/create" class="bg-yellow-500 p-2 text-white rounded-lg">Novo Animes</a>
            <a href="{{ route('animes.index')}}" class="bg-yellow-500 p-2 text-white rounded-lg">Ver Todos</a>
        </nav>
    </div>

</x-guest-layout>
