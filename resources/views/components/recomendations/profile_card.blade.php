<div class="profile_card">
    <div class="circular--landscape">
            <img src="{{ asset('img/profile_pictures/'.$author->profile_picture.'') }}">
    </div>
    <div class="name_holder">
        <div class="name">{{$author->name}}</div>
        <div class="possition">{{$author->possition}}</div>
    </div>
</div>