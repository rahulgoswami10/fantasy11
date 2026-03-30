<h2>{{ ucfirst($sport) }} Matches</h2>

<nav>
  <a href="/sports/football">Football</a>
  <a href="/sports/cricket">Cricket</a>
  <a href="/sports/baseball">Baseball</a>
  <a href="/sports/rugby">Rugby</a>
</nav>

<hr>

@foreach($matches as $match)
  <div style="border:1px solid #ddd;padding:10px;margin:10px 0">
    <strong>{{ $match['homeTeam'] ?? 'Team A' }}</strong>
    vs
    <strong>{{ $match['awayTeam'] ?? 'Team B' }}</strong>
  </div>
@endforeach
