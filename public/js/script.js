alert("Connected!");


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
});

// Skills Section Slide on Scroll

// Smooth Scrolling Function Main Body
$(document).ready(function(){

 //  $('#link0').click(function(){
 //   $path=$("#home").offset().top;
 //     $('html,body').animate({scrollTop:$path}, 1000, 'swing');
 //  });
 //
 // $('#link1').click(function(){
 //  $path=$("#my-skills").offset().top - 100;
 //    $('html,body').animate({scrollTop:$path}, 1000, 'swing');
 // });
 // $('#link2').click(function(){
 //  $path=$("#my-work").offset().top - 80;
 //    $('html,body').animate({scrollTop:$path}, 1000);
 // });
 // $('#link3').click(function(){
 //  $path=$("#my-story").offset().top - 80;
 //    $('html,body').animate({scrollTop:$path}, 1000);
 // });
 // $('#link4').click(function(){
 //  $path=$("#contact").offset().top - 80;
 //    $('html,body').animate({scrollTop:$path}, 1000);
 // });
 $("ul li a").click(function(e){
   e.preventDefault();
   $('html,body').animate({scrollTop:$(this.hash).offset().top - 80}, 1000);
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


// My Work Section Filter
$(document).ready(function(){

  $(".filter-button").click(function(){
    var value = $(this).attr("data-filter");

    // If the user clicks all it will display all projects
    if (value == "all") {
      $(".filter").fadeIn(450);
      $(".portfolio").css('margin-bottom', 500);
    }

    else {
      $(".filter").not("."+value).hide(500);
      $(".filter").filter("."+value).show(600);
      $(".portfolio").height(500).css('margin-bottom', 500);
    }

// Add Active Class To My Work Section

    $("ul .button").click(function(){
      $(this).addClass('active').siblings().removeClass('active');
    });

  });


 });

 // Modal Pop Up
 $(document).ready(function(){
 var modal = document.getElementById('simpleModal');
 // Get open modal button
 var modalBtn = document.getElementById('modalBtn');
 // Get close button
 var closeBtn = document.getElementsByClassName('closeBtn')[0];
 // Listen for outside click
 window.addEventListener('click', outsideClick);


 // Listen for open click
 modalBtn.addEventListener('click', openModal);
 // Listen for open click
 closeBtn.addEventListener('click', closeModal);

 // function to open modal
 function openModal(){
   modal.style.display = 'block';
 }

 // function to close modal
 function closeModal(){
   modal.style.display = 'none';
 }

 // function to close modal
 function outsideClick(e){
   if(e.target == modal) {
      modal.style.display = 'none';
   }

 }
  });
