<div class="recomendations_block">
    @foreach($recommendations as $recommendation)
        <div class="comment_box">
            <div class="recomendation_title">{{$recommendation->title}}</div>
        <div class="recomendation_text">{{$recommendation->review}}</div>
        @component('components.recomendations.profile_card',['author'=>$recommendation->author])
        {{-- statistics section component --}}
        @endcomponent  
        </div>
    @endforeach
</div>