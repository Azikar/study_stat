<div>
    <h1 class='mastery_title_bar'>Mastered on Bitdegree</h1>
    @foreach($mastered as $master)
        @component('components.mastered.mastery_progression',['master'=>$master])
        @endcomponent
    @endforeach
</div>