<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function league($slug)
    {

        $leagueName = match($slug) {
            'laliga' => 'LaLiga',
            'epl' => 'Premier League',
            'bundesliga' => 'Bundesliga',
            'seriea' => 'Serie A',
            'ucl' => 'Champions League',
            default => 'League'
        };
        
        return view('football.league', compact('leagueName'));
    }

    public function index()
    {
        $response = Http::get('https://newsapi.org/v2/everything', [
            // 'q' => 'football OR soccer',
            'q' => 'football OR soccer OR premier league OR la liga OR champions league',
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'pageSize' => 6,
            'apiKey' => config('services.newsapi.key'),
        ]);

        $articles = [];

        if ($response->successful()) {
            $news = $response->json()['articles'];
        }

        return view('football.index', compact('news'));
    }
}
