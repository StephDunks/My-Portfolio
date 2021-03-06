@extends('contact')
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
          {{-- <li class="logo"><img src="/images/stephans-logo.png"></li> --}}
          <li class="nav-links"><a href="#contact" id="link4">Contact</a></li>
          <li class="nav-links"><a href="#my-story" id="link3">My Story</a></li>
          <li class="nav-links"><a href="#my-work" id="link2">My Work</a></li>
          <li class="nav-links"><a href="#my-skills" id="link1">My Skills</a></li>
          <li class="nav-links"><a href="#home" id="link0">Home</a></li>
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

  {{-- Hero Section --}}

  <div id="particles-js">
    <div id="home">
      <div class="hero-text" id="hero-text">
        <h2>Hello, I'm <span class="highlight">Stephan Duncan.</span></h2>
        <h3 class="mb-1">I'm a <span class="highlight2">Web Developer.</span></h3>
        <a class="btn portfolio-button" href="#my-work" id="link2">View Portfolio <i class="fas fa-angle-down"></i></a>
        <a class="btn portfolio-button" href="#contact">Contact Me<i class="far fa-envelope"></i></a>
      </div>
    </div>
  </div>

  {{-- End Hero Section  --}}

  {{-- Skills Section --}}


  <div class="row">
    <div class='split-pane col-xs-12 col-sm-12 col-md-6 design-side' id="design-side">
      <div>
        <div class='text-content'>
          <i class="fas fa-paint-brush"></i>
          <div class='big'>Digital Media Design</div>
        </div>
        <p>I specialize in video production but i can also design and create animations.
          Here are some of the programs i work with.</p>

        <ul>
          <li>Adobe Photoshop</li>
          <li>Adobe Illustrator</li>
          <li>Adobe Premiere Pro</li>
          <li>Adobe After Effects</li>
        </ul>
        <button class="btn"><a href="/pricing">See Pricing</a></button>
      </div>
    </div>
    <div class='split-pane col-xs-12 col-sm-12 col-md-6 development-side' id="design-side">
      <div>
        <div class='text-content'>
          <i class="fas fa-code"></i>
          <div class='big'>Web Development</div>
        </div>
        <p>
          I can create responsive and user friendly websites from concept to completion.
          Here are some of the languages & frameworks i build with.
        </p>
        <ul>
          <li class="skillshighlight">HTML5/CSS3/SASS</li>
          <li class="shighlight">Javascript/Jquery</li>
          <li class="highlight">PHP/Laravel</li>
          <li class="highlight">Wordpress/Drupal</li>
        </ul>
        <button class="btn"><a href="/pricing">See Pricing</a></button>
      </div>
    </div>


      <div id='split-pane-heading'>
        <div>
          <h1 class="deepshadow" id="my-skills">My Skills<h1>
          </div>
        </div>
      </div>



    {{--End Skills Section  --}}


    <!-- Desktop Portfolio Section -->

    <section class="my-work" id="my-work">
      <div class="container">
        <div class="content-section-heading text-center">
          <h1>My Work</h1>
        </div>
      </div>

      <div class="container portfolio">
        <ul>
          <li class="filter-button all active" data-filter="all">All</li>
          <li class="filter-button" data-filter="bootstrap">Bootstrap</li>
          <li class="filter-button" data-filter="javascript">Javascript</li>
          <li class="filter-button" data-filter="php">PHP</li>
          <li class="filter-button" data-filter="videos">Video</li>
          <div style="clear: both;"></div>
        </ul>

        {{-- Modal Popup --}}

        <div class="modal" id="simpleModal">

          <div class="modal-content">
            <div class="modal-header">
                <span class="closeBtn">&times;</span>
                <h2>Company Website Project</h2>
                <p>HTML5/CSS/Bootstrap</p>
            </div>
            <div class="modal-body">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol><div class="carousel-inner" role="listbox">
                  <div class="item active">
                     <img src="/images/superfi-3.jpg" alt="First slide website-example" class="cover">
                  </div>

                  <div class="item">
                     <img src="/images/superfi-2.jpg" alt="Second Slide website-example">
                  </div>

                  <div class="item">
                     <img src="/images/superfi-1.jpg" alt="Second Slide website-example">
                  </div>


                  {{-- Slider Controls!  --}}
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <p>I decided i wanted to build a website ficitous company that provides extremly fast wifi. This was a bootstrap project that we did in the web developer course. It really helped me to get more familiar with bootstrap and i learned how to structure pages a lot better. Bootstrap is pretty easy to use as well you can get a responsive layout up and running in no time.</p>

                <p>The next time i take on a project like this i think i would spend more time in the planning phase. The site looks good but i feel like it could use some more polish in certain areas. Bootstrap seems to be the go to these days when it comes to building beautfil layouts quickly and i plan to do some more research on it</p>
            </div>
            <div class="modal-footer">
                <i class="fab fa-github-square fa-3x"></i></a>
                <a href="https://github.com/StephDunks/Assignment-4/" target="_blank"><h4>View On Github</h4></a>

            </div>

        </div>
        </div>


        {{-- End Modal --}}

        {{-- Modal Popup --}}

        <div class="modal modal2" id="simpleModal2">

          <div class="modal-content">
            <div class="modal-header">
                <span class="closeBtn2">&times;</span>
                <h2>E-commerce Website Project</h2>
                <p>HTML5/CSS/Bootstrap</p>
            </div>
            <div class="modal-body">
              <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel2" data-slide-to="1"></li>
                </ol><div class="carousel-inner" role="listbox">
                  <div class="item active">
                     <img src="/images/watchhub-3.jpg" alt="First slide website-example" class="cover">
                  </div>

                  <div class="item">
                     <img src="/images/watchhub-2.jpg" alt="Second Slide website-example">
                  </div>


                  {{-- Slider Controls!  --}}
                  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <p>The goal for this project was to design an e-commerce store with bootstrap. I decided to do a smart watch store because that is product that i use everyday. I went with a simple color shcheme of blue and white. I found most of my images from pexels.com and the product images i picked up from alibaba. If i decided to build a real store i would probably end up using php and mysql</p>
            </div>
            <div class="modal-footer">
                <i class="fab fa-github-square fa-3x"></i></a>
                <a href="https://github.com/StephDunks/Assignment-4/" target="_blank"><h4>View On Github</h4></a>

            </div>

        </div>
        </div>

        {{-- End Modal --}}
        <div class="box filter bootstrap bootstrap-project-1">
          <div class="box-content">
            <h3 class="title">Company Website Project</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/BOOTSTRAP</span>
            <button id="modalBtn"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter bootstrap bootstrap-project-2">
          <div class="box-content">
            <h3 class="title">E-commerce Store</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/BOOTSTRAP</span>
            <button id="modalBtn2"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter bootstrap bootstrap-project-3">
          <div class="box-content">
            <h3 class="title">BeatByDre Landing Page</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/BOOTSTRAP</span>
            <button id="modalBtn3"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter javascript javascript-project-1">
          <div class="box-content">
            <h3 class="title">Color Game</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/Javascript</span>
            <button id="modalBtn3"class="btn"><a href="http://elegant-thompson-bee19e.bitballoon.com/" target="-_blank">See Project</a></button>
          </div>
        </div>
        <div class="box filter javascript javascript-project-2">
          <div class="box-content">
            <h3 class="title">Rock Paper Scissors Game</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/Javascript</span>
            <button id="modalBtn3"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter javascript javascript-project-3">
          <div class="box-content">
            <h3 class="title">Microwave Project</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/Javascript</span>
            <button id="modalBtn3"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter php php-project-1">
          <div class="box-content">
            <h3 class="title">Wired.com Remake</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/PHP</span>
            <button id="modalBtn3"class="btn">See Project</button>
          </div>
        </div>
        <div class="box filter php php-project-2">
          <div class="box-content">
            <h3 class="title">Personal Project</h3>
            <h4>Built With:</h4>
            <span class="post">HTML5/CSS3/PHP</span>
            <button id="modalBtn3"class="btn">See Project</button>
          </div>
        </div>
        <div class="videobox filter videos video-project-1">
            <iframe width="280" height="300" src="https://www.youtube.com/embed/_dcViW-Yap0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videobox filter videos">
          <iframe width="280" height="300" src="https://www.youtube.com/embed/vfMGzUgJcZw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videobox videobox filter videos">
          <iframe width="280" height="300" src="https://www.youtube.com/embed/D_eMDAXSYC0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

      </div>
    </section>

    {{-- End Desktop Portfolio --}}

    {{-- Mobile Portfolio Section --}}

    <div class="mobile-portfolio">
      <div class="row">
        <div class="col-12 col-sm-6 col-sm-6 col-md-6">
          <div class="box bootstrap bootstrap-project-1">
            <div class="box-content">
              <h3 class="title">Landing Page</h3>
              <h4>Built With:</h4>
              <span class="post">HTML5/CSS3/BOOTSTRAP</span>
              <button id="modalBtn3"class="btn">See Project</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="box bootstrap bootstrap-project-2">
            <div class="box-content">
              <h3 class="title">E-commerce Store</h3>
              <h4>Built With:</h4>
              <span class="post">HTML5/CSS3/BOOTSTRAP</span>
              <button id="modalBtn2"class="btn">See Project</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="box filter bootstrap bootstrap-project-3">
            <div class="box-content">
              <h3 class="title">BeatByDre Landing Page</h3>
              <h4>Built With:</h4>
              <span class="post">HTML5/CSS3/BOOTSTRAP</span>
              <button id="modalBtn3"class="btn">See Project</button>
            </div>
          </div>
        </div>
     </div>
     <div class="row">
       <div class="col-12">
         <div class="videobox filter videos video-project-1">
             <iframe width="100%" height="300" src="https://www.youtube.com/embed/_dcViW-Yap0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
       </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="videobox filter videos">
          <iframe width="100%" height="300" src="https://www.youtube.com/embed/vfMGzUgJcZw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="videobox videobox filter videos">
          <iframe width="100%" height="300" src="https://www.youtube.com/embed/D_eMDAXSYC0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-12">
          <div class="box filter javascript javascript-project-1">
            <div class="box-content">
              <h3 class="title">Game</h3>
              <h4>Built With:</h4>
              <span class="post">HTML5/CSS3/Javascript</span>
              <button id="modalBtn3"class="btn">See Project</button>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="box filter javascript javascript-project-2">
            <div class="box-content">
              <h3 class="title">Game</h3>
              <h4>Built With:</h4>
              <span class="post">HTML5/CSS3/Javascript</span>
              <button id="modalBtn3"class="btn">See Project</button>
            </div>
          </div>
        </div>
          <div class="col-12">
            <div class="box filter javascript javascript-project-3">
              <div class="box-content">
                <h3 class="title">Microwave Project</h3>
                <h4>Built With:</h4>
                <span class="post">HTML5/CSS3/Javascript</span>
                <button id="modalBtn3"class="btn">See Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- My Story --}}
    <section class="my-story">
      <div id="my-story">
        <div class="container">

          <h1>My Story</h1>
        </div>
      </div>
      <div class="demo">
        <div class="container">
          <div class="row picture">
            <div class="col-md-12">
              <img src="images/emoji.png">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="main-timeline">
                <div class="timeline">
                  <span class="timeline-icon">a</span>
                  <div class="timeline-content">
                    <i class="icon fas fa-graduation-cap"></i>
                    <p class="description">
                      At the beginning of this year i enrolled in the fast track web developer program at SAIT because i wanted to get a real job in the industry. The program was quite in depth and i learned a lot in such a short period of time. My goal in the next year is to get a job a full stack developer and i believe SAIT was the perfect starting point for me. There is still so much i want to learn and i plan on taking some more online course to get a better grip on programming in general.
                    </p>
                  </div>
                  <div class="year"><span>2018</span></div>
                </div>
                <div class="timeline">
                  <span class="timeline-icon">b</span>
                  <div class="timeline-content">
                    <i class="icon fas fa-video"></i>
                    <p class="description">
                      This was the year that i decided to start a small video production company with a friend of mine. The film industry was something that always interested me so that’s why I decided to go that route. I mainly focused on doing music videos, weddings and commercials. While I was doing video work I still continued to learn to program through sites like freecodecamp.org and udacity. I started to research places that taught web development in Calgary and thats when i thought about taking the web developer course at SAIT.
                    </p>
                  </div>
                  <div class="year"><span>2017</span></div>
                </div>
                <div class="timeline">
                  <span class="timeline-icon">c</span>
                  <div class="timeline-content">
                    <i class="icon fab fa-codepen"></i>
                    <p class="description">
                      2016 was when i really started considering getting into app development and web development. I played around with android studio a bit and built some basic apps using tutorials from udemy and youtube. I also built a few basic games within unity as well. I still wasn’t to sure if I was ready to take programming on as a career path at that time so I continued to do it as a hobby while I worked.
                    </p>
                  </div>
                  <div class="year"><span>2016</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <section class="my-story">
    <div id="my-story">
    <div class="container">

    <h1>My Story</h1>
  </div>
</div>
<div class="row">
<div class="col-md-6">
<h1>Profile Picture</h1>
</div>
<div class="col-md-6">
<p>My name is Stephan, I live in Calgary, Canada and I’m currently on the journey of becoming a full stack web developer. I really enjoy building things from the ground up and expressing myself creatively through different avenues.</p>
<p>I’ve always had a passion for the tech industry and I’m really interested in the upcoming advancements of artificial intelligence and virtual reality. I also enjoy doing video production and have worked on some professional projects as well as personal. While I’m not coding or making videos I like to meditate, work out and play video games. </p>
</div>
</div>
</div>
</section> --}}

{{-- End My Story --}}

{{-- Contact Section --}}
<section class="contact-section" id="contact">
  <h1>Contact Me</h1>
  <h4>Have some questions or want to work together? Please feel free to send me a short message below</h4>
  <div class="row">
    <div class="col-md-6">
      <div class="container contact-form">
        @if (Session::has('flash_message'))
          <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
        <form method="POST" action="/contact" class="ajax">
          {{csrf_field()}}

          <div class="form-group">
            <label>Name:</label>
            @if ($errors->has('name'))
              <input type="text" name="name" class="form-control is-invalid" value="{{ old('name') }}">
            @else
              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @endif
            @if ($errors->has('name'))
              <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Email Address:</label>
            @if ($errors->has('email'))
              <input type="text" name="email" class="form-control is-invalid" value="{{ old('email') }}">
            @else
              <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            @endif
            @if ($errors->has('email'))
              <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Message:</label>
            @if ($errors->has('message'))
              <textarea name="message" class="form-control is-invalid" value="{{ old('message') }}"></textarea>
            @else
              <textarea name="message" class="form-control" value="{{ old('message') }}"></textarea>
            @endif
            @if ($errors->has('message'))
              <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
            @endif
          </div>
          <button class="btn">Submit</button>

        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div id="map"></div>
    </div>
  </div>
</section>
{{-- End Contact Section --}}





{{-- <div class="footer-section"> --}}
<footer class="text-center">
  <div class="container">
      <p class="email">Email:stephan.duncan90@gmail.com</p>
    <ul class="list-inline mb-5">
      <li class="list-inline-item">
        <a class="social-link" href="www.linkedin.com/in/stephan-duncan" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link" href="https://github.com/StephDunks" target="_blank">
          <i class="fab fa-github-square"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link" href="https://bitbucket.org/StephDunks/" target="_blank">
          <i class="fab fa-bitbucket"></i>
        </a>
      </li>
    </ul>
    <p class="text-muted small mb-0">Copyright &copy; Stephan Duncan 2018</p>
  </div>
</footer>

<script>
  function initMap() {
    // Map options
    var options = {
      zoom: 12,
      center: {lat:51.0486, lng:-114.0708}
    }
    // Map
    var map = new google.maps.Map(document.getElementById('map'), options);

    // Add marker
    var marker = new google.maps.Marker ({
      position:{lat:51.0486, lng:-114.0708},
      map:map
    });
  }
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE6_6TiiQUa3SATxiovACluJkO4Kdsz7Y&callback=initMap">
</script>

<script>
  particlesJS.load('particles-js','particles.json', function(){
    console.log('partcles.json loaded...');
  });
</script>

</body>
</html>
