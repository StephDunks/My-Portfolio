<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="https://cdn.jsdeliver.net/particles.js/2.0.0/particles.min.js"></script>

  <title>Stephan Duncan | Web Devloper</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <style>
  .is-invalid {
    display: block;
    border-color: red;
  }
  </style>

</head>
<body>
  <!-- Desktop Navigation -->
  <header>
    <div class="container">
      <nav class="desktop-nav">

        <ul>
          <li class="logo"><span class="first-initial">S</span><span class="second-initial">D</span></li>
          <li class="nav-links"><a href="#contact" id="link4">Contact</a></li>
          <li class="nav-links"><a href="#my-story" id="link3">My Story</a></li>
          <li class="nav-links"><a href="#my-work" id="link2">My Work</a></li>
          <li class="nav-links"><a href="#my-skills" id="link1">My Skills</a></li>
          <li class="nav-links"><a href="{{ url('/welcome') }}">Home</a></li>
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
        <li><a href="#home" id="link0">Home</a></li>
        <li><a href="#">My Skills</a></li>
        <li><a href="#">My Work</a></li>
        <li><a href="#">My Story</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>


  <div class="pricing-hero">
    <div class="pricing-header">
        <h1>Pricing and Rates</h1>
    </div>

  </div>
  </div>
  <div class="pricing-background">
    <div class="container">
        <h1>Website Development Pricing</h1>
      <div class="row">
          <div class="col-md-4 col-sm-6">
              <div class="pricingTable">
                  <div class="pricingTable-header">
                      <i class="fa fa-adjust"></i>
                      <div class="price-value">$500*</div>
                  </div>
                  <h3 class="heading">Basic Website</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>5 Pages</li>
                          <li>10 Email Ids</li>
                          <li>Google Analytics Integration</li>
                          <li>Social Media Implementation</li>
                          <li>Hosting</li>
                          <li>Domain</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom"></div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6">
              <div class="pricingTable red">
                  <div class="pricingTable-header">
                      <i class="fa fa-briefcase"></i>
                      <div class="price-value">$1500*</div>
                  </div>
                  <h3 class="heading">Advanced Website</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>5-8 Pages</li>
                          <li>10 Email Ids</li>
                          <li>Google Analytics Integration</li>
                          <li>Social Media Implementation</li>
                          <li>Domain Setup</li>
                          <li>Hosting</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom2"></div>
              </div>
          </div>


          <div class="col-md-4 col-sm-6">
              <div class="pricingTable green">
                  <div class="pricingTable-header">
                      <i class="fa fa-briefcase"></i>
                      <div class="price-value">$2500 & Above</div>
                  </div>
                  <h3 class="heading">Web App</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>Up to 10</li>
                          <li>Shopping Cart Integration</li>
                          <li>User Registration</li>
                          <li>Database Setup</li>
                          <li>SEO</li>
                          <li>Social Media Integration</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom3"></div>
              </div>
          </div>
      </div>
  </div>
</div>
  </div>

</body>
</html>
