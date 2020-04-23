<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Negopricing</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  {{-- CSS Main File import --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

{{-- Header --}}
<header>
  <div class="header-contener">
    <div class="header-img">
      <a href="/"><img class="img-fluid" src="/img/logos/png/negopricing-typo.png"
          alt="logo-negopricing"></a>
    </div>
  </div>
</header>

<body>
  {{-- Navigation --}}
  <nav class="main-nav navbar navbar-expand-lg navbar-dark bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            À PROPOS DE NOUS
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/about">Notre Métier</a>
            <a class="dropdown-item" href="/about">Les Rôles</a>
            <a class="dropdown-item" href="/about">Le Push/Pull</a>
            <a class="dropdown-item" href="/about">La Solution Proposée</a>
            <a class="dropdown-item" href="/about">La Neutralité</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            LES DOMAINES VISÉS
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/domains">Présentation Générale</a>
            <a class="dropdown-item" href="#card-ecommerce">L'E-Commerce</a>
            <a class="dropdown-item" href="#card-pointofsale">Les Points de Vente</a>
            <a class="dropdown-item" href="#card-costestimation">L'Offre Personnalisée</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            NOS SECTEURS D'ACTIVITÉ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/activities">Présentation Générale</a>
            <a class="dropdown-item" href="#">La Plateforme "NegoArt"</a>
            <a class="dropdown-item" href="#">La Plateforme "NegoCars"</a>
            <a class="dropdown-item" href="#">La Plateforme "NegoDevis"</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articles">ACTUALITÉ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">CONTACT</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <div class="btn-group">
          <li class="btn btn-login btn-outline-secondary auth-nav-item">
            <a class="nav-link auth-nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="btn btn-register btn-outline-secondary auth-nav-item">
            <a class="nav-link auth-nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
          </li>
        </div>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link nav-link-auth dropdown-toggle" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img class="auth-logo" src="../img/logos/png/profile-logo.png" alt="">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
              {{ __('Se déconnecter') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>

  <main>

    {{-- Events messages when datas are send to the DB --}}
    @if (session()->has('message'))
    <div class="alert alert-success contact-confirmation" role="alert" data-aos="fade" data-aos-duration="1500">

      <span>{{ session()->get('message') }}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    @if (session()->has('article-creation-confirmation'))
    <div class="alert alert-success contact-confirmation" role="alert" data-aos="fade" data-aos-duration="1500">

      <span>{{ session()->get('article-creation-confirmation') }}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    @if (session()->has('article-update-confirmation'))
    <div class="alert alert-success contact-confirmation" role="alert" data-aos="fade" data-aos-duration="1500">

      <span>{{ session()->get('article-update-confirmation') }}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    @if (session()->has('article-delete-confirmation'))
    <div class="alert alert-success contact-confirmation" role="alert" data-aos="fade" data-aos-duration="1500">

      <span>{{ session()->get('article-delete-confirmation') }}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    {{-- Scroll-to-top element --}}
    <div id='scroll_to_top' class='opacity'>
      <img id="scroll_to_top-img" src="/img/logos/png/arrow-nav-logo.png" alt="Retourner en haut">
    </div>

    {{-- Content files calls --}}
    @yield('about')
    @yield('domains')
    @yield('activities')
    @yield('articles')
    @yield('articles_create')
    @yield('article_show')
    @yield('articles_edit')
    @yield('articles_by_category')
    @yield('contact')
    @yield('prospect')
    @yield('candidate')
    @yield('login')
    @yield('register')
    @yield('verify')
    @yield('home')
  </main>

  {{-- Footer --}}
  <footer class="main-footer text-center">
    <div class="legal-declaration">
      <ul class="list-inline d-flex justify-content-around">
        <a class="legal-declaration-link" href="#">
          <li class="list-inline-item">- Mentions Légales -</li>
        </a>
        <a class="legal-declaration-link" href="#">
          <li class="list-inline-item">- Déclaration de confidentialité -</li>
        </a>
        <a class="legal-declaration-link" href="#">
          <li class="list-inline-item">- Politique de confidentialité -</li>
        </a>
      </ul>
    </div>
    <hr>
    <div class="footer-rights">
      <p class="rights">
        <p class="images-rights">- Images libres de droits issues des sites <strong><a class="rights-link"
              href="https://foter.com/">Foter</a></strong> et <strong><a class="rights-link"
              href="https://unsplash.com/">Unplash</a></strong> -</p>
        <p class="logos-rights">- Logos libre de droits respectivement issus et élaborés sur les sites <strong><a
              class="rights-link" href="https://www.flaticon.com/">Flaticon</a></strong> et <strong><a
              class="rights-link" href="https://www.ucraft.com/free-logo-maker">Ucraft </a></strong> -</p>
      </p>
      <hr>
      <img class="footer-logo img-fluid" src="../img/logos/svg/negopricing-logo-pure.svg" alt="logo de negopricing">
      <span>© Negopricing - Tous droits réservés - 2019</span>
    </div>
  </footer>

  {{-- JS Main file import --}}
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- External Bootstrap import--}}
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  {{-- <script>
    Instruction if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
  </script> --}}

  <script>
    $(document).ready(function() {
    function scroll_to_top(div) {
        $(div).click(function() {
            $('html,body').animate({scrollTop: 130}, 'slow');
        });
        $(window).scroll(function(){
            if($(window).scrollTop()<500){
                $(div).fadeOut();
            } else{
                $(div).fadeIn();
            }
        });
    }
    scroll_to_top("#scroll_to_top");
});

  </script>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>