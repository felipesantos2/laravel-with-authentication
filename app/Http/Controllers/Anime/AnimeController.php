<?php

namespace App\Http\Controllers\Anime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Anime;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.animes',
            // [
            //     'animes' => [
            //         '1' => 'Akame ga kill',
            //         '2' => 'One Punch Man',
            //         '3' =>  'Dragon Ball',
            //         '4' =>  'Dragon Ball Z',
            //         '5' =>  'Dragon Ball Kai',
            //         '5' =>  'Dragon Ball GT',
            //         '5' =>  'Dragon Ball Super',
            //         '6' =>  'Super Onze',
            //         '7' =>  'Pokemon',
            //         '8' =>  'Mob Psycho 100',
            //         '9' =>  'Hunter x Hunter',
            //         '10' =>  'Shangri-la Frontier',
            //         '11' =>  'Sword Art online',
            //         '12' =>  'Akuma-kun',
            //         '13' =>  'Naruto',
            //         '14' =>  'Naruto Shippuden',
            //         '15' =>  'Boruto: Naruto Next generation',
            //     ]
            // ]

            ['animes' => Anime::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.anime-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        return view('site.anime-edit', [
            'anime' => $anime,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
