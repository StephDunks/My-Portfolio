// alert("Connected!");


// Navigation Active Class
$(document).ready(function() {
  $('ul li a').click(function(e) {
      var $this = $(this);
      $this.parent().siblings().removeClass('active').end().addClass('active');
      e.preventDefault();
  });

})

// Hero Text Fade-In

$(document).ready(function() {
  $('#hero-text').fadeIn(2500);
})

$(window).on('scroll', function() {
  if($(window).scrollTop()){
    $('.desktop-nav').addClass('black');
  }
  else {
      $('.desktop-nav').removeClass('black');
  }
})

// Skills Section Slide on Scroll

// Smooth Scrolling Function Main Body
$(document).ready(function(){

  $('#link0').click(function(){
   $path=$("#home").offset().top;
     $('html,body').animate({scrollTop:$path}, 1000, 'swing');
  });

 $('#link1').click(function(){
  $path=$("#my-skills").offset().top - 100;
    $('html,body').animate({scrollTop:$path}, 1000, 'swing');
 });
 $('#link2').click(function(){
  $path=$("#my-work").offset().top - 80;
    $('html,body').animate({scrollTop:$path}, 1000);
 });
 $('#link3').click(function(){
  $path=$("#my-story").offset().top;
    $('html,body').animate({scrollTop:$path}, 1000);
 });
});



//Mobile Animations

  $(document).ready(function(){
   $('.toggle').click(function(){
    $('.mobile-nav ul').toggleClass('expand');
   })
  })

// Mobile Scroll Effect
  $(window).on('scroll', function() {
    if($(window).scrollTop()){
      $('.mobile-nav').addClass('black');
    }
    else {
        $('.mobile-nav').removeClass('black');
    }
  })

// Skills Section Expirmental



// Fade In Skills Animations
// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

// Portfolio Section filter
$(document).ready(function(){

    $(".button").click(function(){
      var value = $(this).attr("data-filter");


      if (value == "all") {
        $(".filter").fadeIn(450);
        $(".portfolio").css('margin-bottom', 500);
      }

      else {
        $(".filter").not("."+value).hide(500);
        $(".filter").filter("."+value).show(600);
        $(".portfolio").height(500).css('margin-bottom', 0);
      }

// Add Active Class To My Work Section

      $("ul .button").click(function(){
        $(this).addClass('active').siblings().removeClass('active');
      })

    })
 })
