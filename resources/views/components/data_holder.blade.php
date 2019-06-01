<div class='user_info_container'>
<div class='left'>
        @component('components.progress.progression_holder',['progression_data'=>$progression_data,
        'achievements'=>$achievements])
        {{-- statistics section component --}}
        @endcomponent
        @component('components.recomendations.recomendations_holder')
        {{-- statistics section component --}}
        @endcomponent
</div>
<div class='right'>
        @component('components.about.about',['about'=>$about])
        {{-- about section component --}}
        @endcomponent
        @component('components.certificate_feature.certificate_feature_holder',
        ['statistics'=>$statistics])
        {{-- about section component --}}
        @endcomponent
        @component('components.certificates.certificate_holder')
        {{-- about section component --}}
        @endcomponent
        
</div>
</div>