<div class="season-card">
    <div class="season-header">
        <h3>🏆 Player of the Season race</h3>
    </div>

    @php
        $players = [
            [
                'rank' => 1,
                'name' => 'Raphinha',
                'team' => 'Barcelona',
                'rating' => 7.96,
                'img' => 'raphinha.webp'
            ],
            [
                'rank' => 2,
                'name' => 'Pedri',
                'team' => 'Barcelona',
                'rating' => 7.77,
                'img' => 'pedri.webp'
            ],
            [
                'rank' => 3,
                'name' => 'Vini Jr',
                'team' => 'Real Madrid',
                'rating' => 7.64,
                'img' => 'vini.jpg'
            ],
        ];
    @endphp

    <div class="season-list">
        @foreach($players as $player)
            <div class="season-row">
                <span class="season-rank">{{ $player['rank'] }}</span>

                <img src="{{ asset('assets/images/players/'.$player['img']) }}" class="season-avatar">

                <div class="season-info">
                    <strong>{{ $player['name'] }}</strong>
                    <small>{{ $player['team'] }}</small>
                </div>

                <span class="season-rating">{{ $player['rating'] }}</span>
            </div>
        @endforeach
    </div>
</div>
