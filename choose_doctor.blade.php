<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Aphasia.pk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/3)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/4)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/5)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/6)"></div>
     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="/js/swiper.min.js">
    
  </script>

  <!-- Initialize Swiper -->
  <script>
 
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
     for (var i = 0; i < 4; i++) {
  swiper.appendSlide('<div class="swiper-slide">Slide ' + (i) + '</div>');
  setTimeout(
  function() 
  {
    console.log("sdfasdfa sdf");
    //do something special
  }, 5000);
}
  </script>

</body>
</html>
