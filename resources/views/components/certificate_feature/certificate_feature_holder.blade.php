<div class="certificate_feature_block">
    <div class="certificate_count">
            @component('components.completion.completion',[
                'amount' => $statistics['total_certificates'],
                'title'=>'Certificates Earned',
                'img'=>'cert.png'
             ])
        @endcomponent
    </div>
    <hr>
    <div>
        @component('components.certificate_feature.featured_certificate',['featured'=>$featured, 'user'=>$user])
        @endcomponent
    </div>
</div>