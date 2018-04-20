


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

  $(".hero-text a").click(function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top - 60}, 1000);
 });

 $("ul li a").click(function(e){
   e.preventDefault();
   $('html,body').animate({scrollTop:$(this.hash).offset().top - 60}, 1000);
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
      $(".portfolio").css('margin-bottom', 850);
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
 var modal2 = document.getElementById('simpleModal2');
 // Get open modal button
 var modalBtn = document.getElementById('modalBtn');
 var modalBtn2 = document.getElementById('modalBtn2');
 // Get close button
 var closeBtn = document.getElementsByClassName('closeBtn')[0];
 var closeBtn2 = document.getElementsByClassName('closeBtn2')[0];
 // Listen for outside click
 window.addEventListener('click', outsideClick);


 // Listen for open click
 modalBtn.addEventListener('click', openModal);
 modalBtn2.addEventListener('click', openModal2);
 // Listen for open click
 closeBtn.addEventListener('click', closeModal);
 closeBtn2.addEventListener('click', closeModal2);

 // function to open modal
 function openModal(){
   modal.style.display = 'block';
 }

 function openModal2(){
   modal2.style.display = 'block';
 }

 // function to close modal
 function closeModal(){
   modal.style.display = 'none';
 }

 function closeModal2(){
   modal2.style.display = 'none';
 }

 // function to close modal
 function outsideClick(e){
   if(e.target == modal) {
      modal.style.display = 'none';
   }
   if(e.target == modal2) {
      modal2.style.display = 'none';
   }


 }

  });

  $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel();

      // Enable Carousel Indicators
      $(".item1").click(function(){
          $("#myCarousel").carousel(0);
      });
      $(".item2").click(function(){
          $("#myCarousel").carousel(1);
      });
      $(".item3").click(function(){
          $("#myCarousel").carousel(2);
      });
      $(".item4").click(function(){
          $("#myCarousel").carousel(3);
      });

      // Enable Carousel Controls
      $(".left").click(function(){
          $("#myCarousel").carousel("prev");
      });
      $(".right").click(function(){
          $("#myCarousel").carousel("next");
      });
  });
