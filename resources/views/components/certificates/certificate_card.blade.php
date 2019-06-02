<div class="certificate_card">

    <img src="{{ asset('img/certificates/olive.png') }}">
    <div class="certificate_info">
        <div class="certificate_title">
           
            {{$certificate->title}}
        </div>
        <div class="row margin_l">
            <div class="certificate_meta">
                <img class="author_img" src="{{ asset('img/certificates/author.png') }}">
            <div class="certificate_author">{{$user->name}}</div>
            </div>
            <div class="certificate_meta">
                <img class="author_img" src="{{ asset('img/certificates/date.png') }}">
                <div class="certificate_author">{{date('M-d-Y', strtotime($certificate->pivot->created_at))}}</div>
            </div>
        </div>

    </div>
    <div class="button_hold">
        <div class="download_btn">
            <div class="download">
                    Download
            </div>
            <div class="download_img">
                <img class="author_img" src="{{ asset('img/certificates/download.png') }}">
            </div>
        </div>
    </div>
</div>