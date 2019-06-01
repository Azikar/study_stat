<div class='badge_holder'>
        @foreach ($achievements as $achievement)
                <img src="{{ asset('img/badges/'.$achievement->icon.'') }}">
        @endforeach
</div>