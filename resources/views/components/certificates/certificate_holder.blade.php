<div class="certificates_block" id='app'>
    <h1>Certificates Earned</h1>
    <certificates></certificates>
    {{-- @if(count($certificates)===0)
        <div style='text-align:center; color:white'>
            No certificates pressent
        </div>
    @endif --}}
    {{-- @foreach($certificates as $certificate)
        @component('components.certificates.certificate_card',['certificate'=>$certificate,
        'user'=>$user])
        @endcomponent
    @endforeach --}}
    {{-- <div class="row">
        <div class="see_all_btn">
            See all Certificates
        </div>
    </div> --}}
</div>