<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdeliver.net/particles.js/2.0.0/particles.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.0/mixitup.js"></script>

        <title>Stephan Duncan | Web Devloper</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    </head>
    <body id="page-top">


      <!-- Desktop Navigation -->
      <header>
          <div class="container">
              <nav class="desktop-nav">
                 <div class="logo">
                   <img src="logo.png">
                 </div>
                 <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My Skills</a></li>
                    <li><a href="#">My Work</a></li>
                    <li><a href="#">My Story</a></li>
                    <li><a href="#">Contact</a></li>
                 </ul>
              </nav>
          </div>

          {{-- End Desktop Navigation  --}}

          {{-- Mobile Navigation  --}}

          <nav class="mobile-nav">
              <div class="toggle">
                  <i class="fas fa-bars fa-2x" aria-hidden="true"></i>
              </div>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">My Skills</a></li>
                  <li><a href="#">My Work</a></li>
                  <li><a href="#">My Story</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </nav>
      </header>

{{-- End Mobile Navigation --}}

      @yield('content')
      @yield('contact-form')

      <div class="footer-section">
          <footer class="footer text-center">
              <div class="container">
                  <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-github-square fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#">
                        <i class="fab fa-bitbucket fa-2x"></i>
                        </a>
                    </li>
                  </ul>
                  <p class="text-muted small mb-0">Copyright &copy; Stephan Duncan 2018</p>
              </div>
          </footer>
      </div>

        <script>
          particlesJS.load('particles-js','particles.json', function(){
            console.log('partcles.json loaded...');
          });
        </script>
  </body>
