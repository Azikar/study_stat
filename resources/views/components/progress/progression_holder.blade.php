<div class='progression_block'>
    <h1 class='title_bar'>Progression</h1>
    <div>
        @component('components.progress.lvl_progress',['progression_data'=>$progression_data])
        @endcomponent
    </div>
    <div>
        @component('components.progress.badges',['achievements'=>$achievements])
        @endcomponent
    </div>
    <hr>
    <div>
        @component('components.mastered.mastery_holder')
        @endcomponent
    </div>
</div>