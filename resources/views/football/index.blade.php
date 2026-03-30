@extends('layouts.app')

@section('content')

<div class="football-container">

    {{-- LEFT SIDEBAR --}}
    <aside class="left-sidebar">

        <h3>Top leagues</h3>
        <ul class="league-list">
            <li>
                <a href="{{ route('football.league', 'epl') }}"></a>
                <img src="{{ asset('assets/images/leagues/premier_league.png') }}">
                Premier League
            </li>

            <li>
                <a href="{{ route('football.league', 'ucl') }}"></a>
                <img src="{{ asset('assets/images/leagues/ucl_1.png') }}">
                Champions League
            </li>

            <li>
                <a href="{{ route('football.league', 'laliga') }}"></a>
                <img src="{{ asset('assets/images/leagues/laliga.png') }}">
                LaLiga
            </li>

            <li>
                <a href="{{ route('football.league', 'wc') }}"></a>
                <img src="{{ asset('assets/images/leagues/fifa.png') }}">
                FIFA World Cup
            </li>

            <li>
                <a href="{{ route('football.league', 'eul') }}"></a>
                <img src="{{ asset('assets/images/leagues/europa_league.png') }}">
                Europa League
            </li>

            <li>
                <a href="{{ route('football.league', 'bl') }}"></a>
                <img src="{{ asset('assets/images/leagues/bundesliga.jpeg') }}">
                Bundesliga
            </li>

            <li>
                <a href="{{ route('football.league', 'seriea') }}"></a>
                <img src="{{ asset('assets/images/leagues/serieA.png') }}">
                Serie A
            </li>

            <li>
                <a href="{{ route('football.league', 'ligue1') }}"></a>
                <img src="{{ asset('assets/images/leagues/ligue1.png') }}">
                Ligue 1
            </li>

            <li>
                <a href="{{ route('football.league', 'isl') }}"></a>
                <img src="{{ asset('assets/images/leagues/isl.png') }}">
                Indian Super League
            </li>

            <li>
                <a href="{{ route('football.league', 'fa') }}"></a>
                <img src="{{ asset('assets/images/leagues/fa_cup.png') }}">
                FA Cup
            </li>
        </ul>

    </aside>

    {{-- CENTER MATCHES --}}
    <main class="match-center">

        <div class="league-card">
            <h4>England - Premier League</h4>

            <div class="match-row live">
                <span>Bournemouth</span>
                <span class="score">2 - 2</span>
                <span>Man United</span>
            </div>

            <div class="match-row">
                <span>Brighton</span>
                <span class="time">18:00</span>
                <span>Liverpool</span>
            </div>

        </div>

        <div class="league-card">
            <h4>Spain - LaLiga</h4>

            <div class="match-row finished">
                <span>Villarreal</span>
                <span class="score">3 - 1</span>
                <span>Real Sociedad</span>
            </div>

            <div class="match-row">
                <span>Elche</span>
                <span class="time">18:30</span>
                <span>Mallorca</span>
            </div>

        </div>

    </main>

    {{-- RIGHT NEWS --}}
    <aside class="right-sidebar">
        <h3>News</h3>

        @foreach($news as $article)
        <div class="news-item">
            <img src="{{ $article['urlToImage'] ?? '' }}">
            <div>
                <p>{{ $article['title'] ?? '' }}</p>
                <small>{{ $article['source']['name'] ?? '' }}</small>
            </div>
        </div>
        @endforeach

    </aside>

</div>

@endsection