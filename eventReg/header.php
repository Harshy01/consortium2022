<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./scroll-animation.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/otherStyles.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />


      <!-- NAVBAR -->
        <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-lg py-0 sticky-top" style="background-color: #171717;">
      <a href="https://www.ecellvnit.org/" class="navbar-brand">
      <img class="d-none d-lg-block ml-3" src="../img/E-Cell_white.png" alt="ecell" width="170px">
      <img class="d-sm d-lg-none ml-3" src="../img/E-Cell_white.png" alt="ecell" width="120px"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navLinks"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item d-none d-lg-block">
            <a href="../index.php#home" target="_blank" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="../index.php#home_mob" target="_blank" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="../events.php" target="_blank" class="nav-link">Events</a>
          </li>
          <li class="nav-item">
           <a href="../speakers.php" target="_blank" class="nav-link">Speakers</a>
          </li>
          <li class="nav-item dropdown align-items-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sponsors
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-center text-white disabled" href="../newSponsors.php" target="_blank">Consortium'22 Sponsors</a>
              <a class="dropdown-item text-center text-md-left text-white" href="../pastSponsors.php" target="_blank">Past Sponsors</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="../core.php" class="nav-link" target="_blank">Team</a>
          </li>
        </ul>
        <li class="nav-item d-none d-lg-block">
          <a class="btn btnth mr-3" type="submit" href="../consoRegister.php" target="_blank" role="button">Register</a>
        </li>
        <li class="nav-item d-none d-lg-block">
        <a class="btn btnth" type="submit"" href="logout.php" role="button">Log Out</a>
        </li>
        <li class="nav-item d-block d-lg-none text-center">
          <a class="btn btnth my-3" type="submit" href="../consoRegister.php" target="_blank" role="button">Register</a>
        </li>
        <li class="nav-item d-block d-lg-none text-center">
        <a class="btn btnth my-3" type="submit""  href="logout.php" role="button">Log Out</a>
        </li>
      </div>
    </nav>


    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"
  ></script>
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"
  ></script>
  <script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  

  
  <script>
    $(document).ready(function() {
 var one = $("#one");
 var two = $("#two");

one.owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:1
      }
  }
});  

two.owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:1
      }
  }
});
});
</script>
<script>
     $(window).scroll(function() {
  var a = 0;
  var oTop = $('#counter').offset().top - window.innerHeight;
  console.log($('#counter').offset().top);
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    a = 1;
  }
});
   </script>

<script>
  AOS.init();
</script>
<!-- <script>
  window.addEventListener('load', () => {
AOS.init({
offset: 1700,
})
});
</script> -->
<script>
  $(function() {
    $(".preload").fadeOut(3000, function() {
        $(".content").fadeIn(2000);        
    });
});
</script>
</head>

</html>