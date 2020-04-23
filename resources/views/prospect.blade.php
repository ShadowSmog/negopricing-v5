@extends('layout')
@section('prospect')
<section class="prospects-contact">
  <div class="card card-form-prospects">
    <div class="card-header prospects-header">
      <button type="button" class="close btn-closure">
        <a class="closure" href="/contact">x</a>
      </button>
      <h3 class="form-prospects-title">Demande d'informations</h3>
    </div>

    <div class="card-body prospects-body">
      <img class="contact-img informations-logo img-fluid" src="../img/logos/png/informations.png">
      <form action="{{ action('ProspectController@store') }}" method="POST">
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
          <label for="company">Entreprise: *</label>
          <div>
            <input type="text" name="company" placeholder="Renseignez votre entreprise..."
              class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
            @error('company')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="status">Votre Statut: *</label>
          <div>
            <input type="text" name="status" placeholder="Renseignez votre statut au sein de l'entreprise..."
              class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
            @error('status')
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
              class="form-control form-control-message @error('phone') is-invalid @enderror"
              value="{{ old('message') }}"></textarea>
            @error('message')
            <div class="invalid-feedback">Veuillez renseignez le champ.</div>
            @enderror
          </div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" class="consent" id="consent" value="a consenti">
            <p class="consent-text col-md-10">
              En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de l' activité de Negopricing, afin que cette dernière puisse me recontacter pour une démonstration de sa solution applicative.
            </p>
          </div>
        <button type="submit" class="btn btn-secondary btn-prospects ">Envoyer ma demande de renseignement <img class="btn-logo" src="../img/logos/png/paperplane-logo.png" alt=""></button>
      </form>
    </div>
    <div class="card-footer data-rights">
        <p class="data-rights-text">Pour connaître et exercer vos droits, notamment de retrait de votre consentement à l'utilisation des données collectées par ce formulaire, veuillez consulter notre <a href="" class="data-rights-link">politique de confidentialité</a>.</p>
    </div>
  </div>
</section>
@endsection