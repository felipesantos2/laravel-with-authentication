<x-app-layout>
    <div class="max-w-full w-3/4 mx-auto mt-8">
        @foreach ($animes as $anime)
            <div class="w-full border border-yellow-500 px-10 py-6 flex gap-4 justify-between items-center m-2 rounded-lg">
                <div class="flex flex-col items-center">
                    Anime:
                    <span class="text-black font-semibold text-md">
                        {{ $anime->name }}
                    </span>
                    <div>
                        <img class="w-24 cursor-pointer" src="https://m.media-amazon.com/images/I/61AJXRV7DRL._AC_UF1000,1000_QL80_.jpg" alt="">
                    </div>
                </div>
                <div>
                    <a href="{{ route('animes.edit', ['anime' => $anime->id])}}" class="text-gray-500 font-semibold uppercase bg-yellow-400 px-2 py-2 rounded-lg inline-block"> Editar </a> /
                    <a href="{{ route('animes.edit', ['anime' => $anime->id])}}" class="text-green-600 font-semibold uppercase bg-yellow-400 px-2 py-2 rounded-lg inline-block"> Info  </a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
