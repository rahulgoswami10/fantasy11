@extends('layouts.app')

@section('content')

{{-- <div class="sports-tabs">
    <a href="#">Cricket</a>
    <a href="#">Football</a>
    <a href="#">Baseball</a>
    <a href="#">Rugby</a>
</div> --}}
<div class="container">
    <div class="matches">
        {{-- match card 1 --}}
        <div class="match-card">
            <div class="teams">
                <span>Team A</span>
                <strong>VS</strong>
                <span>Team B</span>
            </div>
            <div class="meta">
                <span>Starts in 30m</span>
                <button>Join Contest</button>
            </div>
        </div>

        {{-- match card 2 --}}
        <div class="match-card">
            <div class="teams">
                <span>Team A</span>
                <strong>VS</strong>
                <span>Team B</span>
            </div>
            <div class="meta">
                <span>Starts in 30m</span>
                <button>Join Contest</button>
            </div>
        </div>

        {{-- match card 3 --}}
        <div class="match-card">
            <div class="teams">
                <span>Team A</span>
                <strong>VS</strong>
                <span>Team B</span>
            </div>
            <div class="meta">
                <span>Starts in 30m</span>
                <button>Join Contest</button>
            </div>
        </div>
    </div>
</div>


@endsection
