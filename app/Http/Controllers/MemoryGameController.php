<?php

namespace App\Http\Controllers;

class MemoryGameController extends Controller
{
    public function getCards()
    {
        $path = storage_path('app/data/cards.json');
        $cards = json_decode(file_get_contents($path), true);

        shuffle($cards);

        return response()->json($cards);
    }
}
