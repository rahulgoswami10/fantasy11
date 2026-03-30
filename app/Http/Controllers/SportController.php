<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportController extends Controller
{
    public function index($sport = 'football') {

        $response = Http::get('http://api.sportsrc.org/', [
            'data' => 'matches',
            'category' => $sport
        ]);

        return view('sports.index', [
            'sport' => $sport,
            'matches' => $response->json()
        ]);
    }
}
