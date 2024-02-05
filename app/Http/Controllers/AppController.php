<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        return Inertia::render('App/Index');
    }

    public function cards()
    {
        $highestWeek = Card::max('week');

        $highestRatings = Card::join('players', 'cards.player_id', '=', 'players.id')
            ->where('cards.week', $highestWeek)
            ->select('players.image', 'players.name', 'players.position', 'cards.played_champion_1', 'cards.record_with_champion_1', DB::raw('MAX(cards.rating) as max_rating'))
            ->groupBy('players.image', 'players.name', 'players.position', 'cards.played_champion_1', 'cards.record_with_champion_1')
            ->orderByDesc('max_rating')
            ->get();

        $highestRating = $highestRatings->shift();

        $otherRatings = $highestRatings;

        return Inertia::render('App/Cards', [
            'best' => $highestRating,
            'bests' => $otherRatings,
            'cards' => Card::with('player', 'against_1', 'against_2')->get()
        ]);
    }
}
