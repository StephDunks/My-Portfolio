@extends('layout')
@extends('contact')


@section('content')
{{-- Hero Section --}}

 <div id="particles-js">
     <div class="hero-text" id="hero-text">
       <h2>Hello, I'm <span class="highlight">Stephan Duncan.</span></h2>
       <h3 class="mb-1">I'm a Media Developer.</h3>
       <a class="btn btn-xl portfolio-button" href="#portfolio">View Portfolio <i class="fas fa-angle-right"></i></a>
     </div>
 </div>

{{-- End Hero Section  --}}

{{-- Skills Section --}}
<div class="row">
    <div class='split-pane col-xs-12 col-sm-6 design-side' id="design-side">
      <div>
          <div class='text-content'>
              <i class="fas fa-paint-brush"></i>
              <div class='big'>Digital Media Design</div>
          </div>
          <p>I can design for the web, illustrate and animate.
           I also have a passion for video production as well.
           Here are some of the programs i work with.
         </p>
          <ul>
            <li class="highlight">Adobe Photoshop</li>
            <li class="highlight">Adobe Illustrator</li>
            <li class="highlight">Adobe Premiere Pro</li>
            <li class="highlight">Adobe After Effects</li>
          </ul>
          <button class="btn">Let's Get Started</button>
        </div>
    </div>
    <div class='split-pane col-xs-12 col-sm-6 development-side' id="design-side">
        <div>
            <div class='text-content'>
                <i class="fas fa-code"></i>
                <div class='big'>Web Development</div>
            </div>
            <p>
              I can create responsive and user friendly websites for your business.
              Here are some of the languages & frameworks i build with.
            </p>
            <ul>
                <li class="highlight">HTML5/CSS3/SASS</li>
                <li class="highlight">Javascript/Jquery</li>
                <li class="highlight">PHP/Laravel</li>
                <li class="highlight">Wordpress/Drupal</li>
            </ul>
            <button class="btn">Let's Get Started</button>
        </div>
    </div>

      <div id='split-pane-or'>
        <div>
          <h1 id="my-skills">My Skills<h1>
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
          <div class="bottom-border"></div>
      </div>

      <div class="container portfolio">
          <ul>
            <li class="button all active" data-filter="all">All</li>
            <li class="button" data-filter="websites">Websites</li>
            <li class="button" data-filter="animations">Animations</li>
            <li class="button" data-filter="videos">Video</li>
            <div style="clear: both;"></div>
          </ul>
          <div class="box filter websites">
            <div class="box-content">
                <h3 class="title">Landing Page</h3>
                <h4>Built With:</h4>
                <span class="post">HTML5/CSS3/BOOTSTRAP</span>
                <button class="btn" href="#">See Project</button>
            </div>
          </div>
          <div class="box filter websites">
              <div class="box-content">
                  <h3 class="title">Landing Page</h3>
                  <h4>Built With:</h4>
                  <span class="post">HTML5/CSS3/BOOTSTRAP</span>
                  <button class="btn" href="#">See Project</button>
              </div>
          </div>
          <div class="box filter websites">
            <div class="box-content">
                <h3 class="title">Landing Page</h3>
                <h4>Built With:</h4>
                <span class="post">HTML5/CSS3/BOOTSTRAP</span>
                <button class="btn" href="#">See Project</button>
            </div>
          </div>
          <div class="box filter animations">Animation</div>
          <div class="box filter animations">Animation</div>
          <div class="box filter animations">Animation</div>
          <div class="box filter videos">Video</div>
          <div class="box filter videos">Video</div>
          <div class="box filter videos">Video</div>

      </div>
   </section>

{{-- End Desktop Portfolio --}}

{{-- Mobile Portfolio Section --}}

  <div class="mobile-portfolio">
     <div class="row">
       <div class="col-md-4">
             <div class="box websites">Websites</div>
       </div>
       <div class="col-md-4">
             <div class="box websites">Websites</div>
       </div>
       <div class="col-md-4">
             <div class="box websites">Websites</div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
             <div class="box videos">Videos</div>
       </div>
       <div class="col-md-4">
             <div class="box videos">Videos</div>
       </div>
       <div class="col-md-4">
             <div class="box videos">Videos</div>
           </div>
     <div class="row">
       <div class="col-md-4">
             <div class="box animations">Animations</div>
       </div>
       <div class="col-md-4">
             <div class="box animations">Animations</div>
       </div>
       <div class="col-md-4">
             <div class="box animations">Animations</div>
       </div>
     </div>
  </div>
</div>

{{-- My Story --}}
<section class="my-story">
  <div id="my-story">
      <div class="container">
          <div class="content-section-heading text-center">
            <h1>My Story</h1>
          </div>
      </div>
  </div>
    <div class="row">
       <div class="col-md-6">
          <h1>Profile Picture</h1>
       </div>
       <div class="col-md-6">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
    </div>
  </div>
</section>

@endsection


{{-- Contact Section --}}

  {{-- <div class="container contact-section">
     <div class="text-center">
       <h1>Contact Me</h1>
     </div>
 </div> --}}
{{-- <div class="bottom-border"></div> --}}





{{-- End Contact --}}



    </body>
</html>
