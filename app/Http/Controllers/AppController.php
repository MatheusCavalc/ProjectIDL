<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class AppController extends Controller
{
    public function index()
    {
        return Inertia::render('App/Index');
    }

    public function cards()
    {
        return Inertia::render('App/Cards', [
            'cards' => Card::with('player', 'against_1', 'against_2')->get()
        ]);
    }
}
