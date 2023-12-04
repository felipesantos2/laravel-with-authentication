<?php

namespace App\Livewire\Animes;

use Livewire\Component;
use App\Models\Anime;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate as AttributesValidate;

class AnimeCreate extends Component
{
    public Anime $anime;

    #[AttributesValidate('required')]
    public $name = '';

    #[AttributesValidate('required')]
    public $episodes = '';

    public function saveNewAnime()
    {
        //$this->anime = new Anime();

        $affected = DB::insert('insert into animes (id, name, episodes) values (?, ?, ?)', [null, $this->name, $this->episodes]);

        if($affected) {
            return redirect()->route('home.index');
        }
    }

    public function render()
    {
        return view('livewire.animes.anime-create');
    }
}
