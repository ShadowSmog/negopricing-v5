<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Negopricing</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  {{-- Tuesday CSS Librairy Import --}}
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/gh/shakrmedia/tuesday@v1.1.0/build/tuesday.min.css" />

  {{-- CSS Main File import --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <main>
    <div class="body-background">
      <div class="body-presentation">
        <img data-aos="flip-left" data-aos-duration="1500" id="img-animation" class="img-presentation img-fluid flip"
          src="../img/logos/svg/negopricing-logo-pure.svg" alt="logo-negopricing">
        <section class="users-messages">
          <p data-aos="fade-down-right" data-aos-duration="1500" class="direction-message message-left">Pour <strong
              class="emphasis">visiter</strong> notre <em class="light-emphasis">site</em> ...</p>
          <p data-aos="fade-up" data-aos-duration="1500" class="direction-message message-halfleft">... et en <strong
              class="emphasis">apprendre</strong> davantage ...</p>
          <p data-aos="fade-down" data-aos-duration="1500" class="direction-message message-halfright">... sur nos <em
              class="light-emphasis">services</em> ...</p>
          <p data-aos="fade-up-left" data-aos-duration="1500" class="direction-message message-right">... <strong
              class="emphasis">cliquez</strong> sur le <em class="light-emphasis">lien ci-dessous</em>.</p>
          <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="btn btn-secondary enter-btn"
            href="about" role="button">Visiter notre site</a>
        </section>
      </div>
    </div>
  </main>

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
</body>

</html>