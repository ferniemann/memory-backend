<?php

namespace App\Http\Controllers;

class MemoryGameController extends Controller
{
    public function getCards(string $size)
    {
        $path = storage_path('app/data/cards.json');
        $cards = json_decode(file_get_contents($path), true);

        foreach ($cards as &$card) {
            $card['image'] = url($card['image']);
        }

        $cards = array_splice($cards, 0, $size);

        shuffle($cards);

        return response()->json($cards);
    }
}
