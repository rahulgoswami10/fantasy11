@php
$teams = [
 [
   'name'=>'Barcelona',
   'logo'=>'barcelona.png',
   'p'=>19,'w'=>16,'d'=>1,'l'=>2,
   'gd'=>'+33','goals'=>'53:20','pts'=>49,
   'form'=>['W','W','W','W','W']
 ],
 [
   'name'=>'Real Madrid',
   'logo'=>'realmadrid.png',
   'p'=>19,'w'=>14,'d'=>3,'l'=>2,
   'gd'=>'+24','goals'=>'41:17','pts'=>45,
   'form'=>['W','D','W','W','L']
 ],
 [
   'name'=>'Atletico Madrid',
   'logo'=>'atleticomadrid.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Atletic Club',
   'logo'=>'bilbao.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Sevilla',
   'logo'=>'sevilla.jpg',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Villareal',
   'logo'=>'villareal.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Real Sociedad',
   'logo'=>'sociedad.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Valencia',
   'logo'=>'valencia.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
  [
   'name'=>'Osasuna',
   'logo'=>'osasuna.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
   [
   'name'=>'Rayo Vallecano',
   'logo'=>'rayo.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
   [
   'name'=>'Mallorca',
   'logo'=>'mallorca.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
    [
   'name'=>'Getafe',
   'logo'=>'getafe.png',
   'p'=>19,'w'=>11,'d'=>5,'l'=>3,
   'gd'=>'+17','goals'=>'34:17','pts'=>38,
   'form'=>['W','W','D','L','W']
 ],
];
@endphp

<div class="points-table-wrapper">

    <div class="table-header">
        <h2>LaLiga Standings</h2>

        <div class="filter-tabs">
            <button class="active">All</button>
            <button>Home</button>
            <button>Away</button>
        </div>
    </div>

    <div class="points-table">

        <div class="table-row table-head">
            <span>#</span>
            <span>Team</span>
            <span>P</span>
            <span>W</span>
            <span>D</span>
            <span>L</span>
            <span>GD</span>
            <span>Goals</span>
            <span>Last 5</span>
            <span>PTS</span>
        </div>

        @foreach($teams as $i => $team)
        <div class="table-row">
            <span class="rank {{ $i == 0 ? 'green' : '' }}">{{ $i+1 }}</span>

            <span class="team">
                <img src="{{ asset('assets/images/laliga/'.$team['logo']) }}">
                {{ $team['name'] }}
            </span>

            <span>{{ $team['p'] }}</span>
            <span>{{ $team['w'] }}</span>
            <span>{{ $team['d'] }}</span>
            <span>{{ $team['l'] }}</span>
            <span class="positive">{{ $team['gd'] }}</span>
            <span>{{ $team['goals'] }}</span>

            <span class="form">
                @foreach($team['form'] as $f)
                    <i class="{{ $f == 'W' ? 'win' : 'loss' }}">{{ $f }}</i>
                @endforeach
            </span>

            <span class="points">{{ $team['pts'] }}</span>
        </div>
        @endforeach

    </div>
</div>