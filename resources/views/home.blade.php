@extends('layout')

@section('home')
<article class="home body-background">
    <div class="container-fluid home-presentation">
        <img data-aos="flip-left" data-aos-duration="1500" id="img-animation" class="img-presentation img-fluid flip"
            src="../img/logos/svg/negopricing-logo-pure.svg" alt="logo-negopricing">
        <div class="home-content">
            <div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div>
                    <p>Bienvenue sur</p>
                    <p data-aos="fade-down" data-aos-duration="1500">Negopricing</p>
                    <p data-aos="fade-up" data-aos-duration="1500"><strong>{{ Auth::user()->name }}</strong></p>
                    !
                </div>
            </div>
        </div>
    </div>
</article>
@endsection