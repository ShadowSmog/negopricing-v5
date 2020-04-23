@extends('layout')
@section('candidate')
<section class="candidates-contact">
  <div class="card card-form-candidates">
    <div class="card-header candidates-header">
      <button type="button" class="close btn-closure">
        <a class="closure" href="/contact">x</a>
      </button>
      <h3 class="form-candidates-title">Proposition de candidature</h3>
    </div>

    <div class="card-body candidates-body">
      <img class="contact-img candidates-logo img-fluid" src="../img/logos/png/colaboration.png"
        alt="logo symbolizing colaboration">
      <form action="{{ action('CandidateController@store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="civility">Civilité: *</label>
          <div>
            <select name="civility" id="civility-select">
              <option value="Madame">Madame</option>
              <option value="Monsieur">Monsieur</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="lastname">Nom: *</label>
          <div>
            <input type="text" name="lastname" placeholder="Renseignez votre nom..."
              class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}">
            @error('lastname')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="firstname">Prénom: *</label>
          <div>
            <input type="text" name="firstname" placeholder="Renseignez votre prénom..."
              class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}">
            @error('firstname')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="onlinecv">CV: *</label>
          <div>
            <input type="text" name="onlinecv" placeholder="Lien vers votre cv en ligne..."
              class="form-control @error('onlinecv') is-invalid @enderror" value="{{ old('onlinecv') }}">
            @error('onlinecv')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="email">E-mail: *</label>
          <div>
            <input type="text" name="email" placeholder="Renseignez votre adresse email..."
              class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="phone">Téléphone: *</label>
          <div>
            <input type="text" name="phone" placeholder="Renseignez votre n° de téléphone..."
              class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
            @error('phone')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="message">Message: *</label>
          <div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..."
              class="form-control form-control-message @error('message') is-invalid @enderror"
              value="{{ old('message') }}"></textarea>
            @error('message')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" class="consent" id="consent" value="a consenti">
          <p class="consent-text col-md-10">
            En soumettant ce formulaire j'accepte que les informations saisies soient exploitées dans le cadre de l' activité de Negopricing, afin que cette dernière puisse me recontacter dans l'éventualité d'une future collaboration.
          </p>
        </div>
        <div>
          <button type="submit" class="btn btn-secondary btn-prospects">Envoyer ma candidature <img class="btn-logo"
              src="../img/logos/png/paperplane-logo.png" alt=""></button>
        </div>
      </form>
    </div>
    <div class="card-footer data-rights">
        <p class="data-rights-text">Pour connaître et exercer vos droits, notamment de retrait de votre consentement à l'utilisation des données collectées par ce formulaire, veuillez consulter notre <a href="" class="data-rights-link">politique de confidentialité</a>.</p>
    </div>
  </div>
</section>
@endsection