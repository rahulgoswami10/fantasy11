@php
$matches = [
 [
   'league' => 'LaLiga',
   'time' => '18:30',
   'team1' => 'Osasuna',
   'team1_logo' => 'osasuna.png',
   'team2' => 'Getafe',
   'team2_logo' => 'getafe.png',
 ],
 [
   'league' => 'LaLiga',
   'time' => '21:00',
   'team1' => 'Barcelona',
   'team1_logo' => 'barcelona.png',
   'team2' => 'Real Madrid',
   'team2_logo' => 'realmadrid.png',
 ],
  [
   'league' => 'LaLiga',
   'time' => '21:00',
   'team1' => 'Atletico Madrid',
   'team1_logo' => 'atleticomadrid.png',
   'team2' => 'Villareal',
   'team2_logo' => 'villareal.png',
 ],
  [
   'league' => 'LaLiga',
   'time' => '21:00',
   'team1' => 'Athletic Club',
   'team1_logo' => 'bilbao.png',
   'team2' => 'Real Sociedad',
   'team2_logo' => 'sociedad.png',
 ],
  [
   'league' => 'LaLiga',
   'time' => '21:00',
   'team1' => 'Barcelona',
   'team1_logo' => 'barcelona.png',
   'team2' => 'Real Madrid',
   'team2_logo' => 'realmadrid.png',
 ],
  [
   'league' => 'LaLiga',
   'time' => '21:00',
   'team1' => 'Barcelona',
   'team1_logo' => 'barcelona.png',
   'team2' => 'Real Madrid',
   'team2_logo' => 'realmadrid.png',
 ],
];
@endphp

<div class="matches-card">
    <h3>Upcoming Matches</h3>

    @foreach($matches as $match)
    <div class="match-item">
        <div class="match-time">{{ $match['time'] }}</div>

        <div class="teams">
            <div class="team">
                <img src="{{ asset('assets/images/laliga/'.$match['team1_logo']) }}">
                {{ $match['team1'] }}
            </div>

            <span class="vs">VS</span>

            <div class="team">
                <img src="{{ asset('assets/images/laliga/'.$match['team2_logo']) }}">
                {{ $match['team2'] }}
            </div>
        </div>

        <div class="league-name">{{ $match['league'] }}</div>
    </div>
    @endforeach
</div>
