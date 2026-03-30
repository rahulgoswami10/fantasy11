@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/points-table.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/league.css') }}">

<div class="league-page">

    {{-- LEFT : MATCHES --}}
    <aside class="league-left">
        @include('football.partials.upcoming-matches')

        <div style="margin-top: 20px;">
            @include('football.partials.player-of-season')
        </div>
    </aside>

    {{-- RIGHT : POINTS TABLE --}}
    <main class="league-right">
        {{-- <h2>{{ $leagueName }} Standings</h2> --}}
        @include('football.partials.points-table')
    </main>

</div>
@endsection


