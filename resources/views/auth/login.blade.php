@extends('layout')

@section('login')
<article class="auth-form">
    <div class="login-form container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div data-aos="flip-left" data-aos-duration="1000" class="card login-card">
                    <div class="card-header login-header">{{ __('Se connecter à Negopricing') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-mail') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Mot de passe') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label remember-label" for="remember">
                                            {{ __('Resté connecté') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group submit-group">
                                <div>
                                    <button type="submit" class="btn btn-primary login-btn">
                                        {{ __('Se connecter') }}
                                    <img src="../../img/logos/png/enter-logo.png" class="btn-logo" alt="">
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link forgot-pswd-link" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
