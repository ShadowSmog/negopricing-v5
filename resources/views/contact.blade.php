@extends('layout')
@section('contact')
<section class="contact">
    <h1 data-aos="fade-right" class="contact-title">Nous contacter</h1>
    <div class="contact-group">
        <div class="prospects">
            <h2 class="contact-prospects-title">Notre solution vous intéresse et vous souhaitez en savoir plus?</h2>
            <div class="prospects-content">
                <img class="contact-img informations-logo img-fluid" src="../img/logos/png/informations.png"
                    alt="logo of two people discussing">
                <h3 class="contact-prospects-subtitle">C'est par ici</h3>
                <div class="btn-direction">
                    <img class="arrow-logo img-fluid" src="../img/logos/png/arrow.png" alt="logo arrow">
                    <a href="prospect" data-aos="fade-up" type="button" class="btn btn-secondary btn-prospects" role="button">Demande d'informations</a>
                </div>
            </div>
        </div>

        <div class="candidates">
            <h2 class="contact-candidates-title">Notre projet vous intéresse et vous souhaitez collaborer avec nous?
            </h2>
            <div class="candidates-content">
                <img class="contact-img candidates-logo img-fluid" src="../img/logos/png/colaboration.png"
                    alt="logo symbolizing colaboration">
                <h3 class="contact-candidates-subtitle">C'est par là</h3>
                <div class="btn-direction">
                    <img class="arrow-logo img-fluid" src="../img/logos/png/arrow.png" alt="logo arrow">
                    <a href="candidate" data-aos="fade-up" type="button" class="btn btn-secondary btn-candidates"
                        role="button">Proposition de candidature</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection