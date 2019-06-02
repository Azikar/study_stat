<div class="featured_section">
    <h1>Featured Certificate</h1>
   
    @foreach($featured as $featured_cert)
        <img  src="{{ asset('img/certificates_templates/'.$featured_cert->pivot->certificate_img.'') }}"><br>
    @endforeach
</div>