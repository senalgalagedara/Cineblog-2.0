<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'kungfupanda4';
$movie_title = 'Kung Fu Panda 4';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kung Fu Panda 4- CINEBLOG</title>
    <meta name="description" content="Kung Fu Panda 4: Po returns for another exciting adventure, embracing his role as the Dragon Warrior and discovering new aspects of his destiny.">

    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <script src="../../assert/js/allwork.js" async></script>
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" async crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" async>
    <link rel="preconnect" href="https://fonts.gstatic.com" async crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" async rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" async rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" async rel="stylesheet">

</head>
<body>
  <?php include __DIR__ . '/../../includes/navbar.php'; ?>
    <header class="adoo">
      <div class="slideshow-container">

          <div class="mySlides fade">
            <img src="../../assert/img/coverpics2/kungfupanda4.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Kung Fu Panda 4 </span>
              <p class="podidetails">2024   |   Comedy/Adventure    |    1h 34m</p>
              <p class="details">Po must train a new warrior when he's chosen to become the spiritual leader of the Valley of Peace. However, when a powerful shape-shifting sorceress sets her eyes on his Staff of Wisdom, he suddenly realizes he's going to need some help.</p>
              <p class="cast">Jack Black | Awkwafina | Bryan Cranston</p>
              <?php renderHeaderButtons($movie_id, $movie_title, $movie_type); ?>
            </div>
            <br>
          </div>
          
      </div> 
    </header> 

    <div class="space"></div>

    <div class="box1">
      <div class="aboutmovie">
        <h2 class="infotitle">Movie Information</h2>
        <h3 class="listdetails boldd align">Plot Summary</h2>

        <p class="googleinfo">Po must train a new warrior when he's chosen to become the spiritual leader of the Valley of Peace. However, when a powerful shape-shifting sorceress sets her eyes on his Staff of Wisdom, he suddenly realizes he's going to need some help.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> March 8, 2024</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Comedy & Adventure</li>
          <li class="listdetails"><b class="boldd">Director:</b>Mike Mitchell</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Rebecca Huntley</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$537.4 M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 34m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Universal Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Mike_Mitchell_by_Gage_Skidmore.jpg/440px-Mike_Mitchell_by_Gage_Skidmore.jpg">
            <p class="castname">Mike Mitchell</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/2016_RiP_Tenacious_D_-_Jack_Black_-_by_2eight_-_8SC8891.jpg/440px-2016_RiP_Tenacious_D_-_Jack_Black_-_by_2eight_-_8SC8891.jpg">
            <p class="castname">Jack Black</p>
            <p class="role">Po</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Awkwafina_%28cropped%29_2.jpg/440px-Awkwafina_%28cropped%29_2.jpg">
            <p class="castname">Awkwafina</p>
            <p class="role">Zhen</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/BryanCranston2022.jpg/440px-BryanCranston2022.jpg">
            <p class="castname">Bryan Cranston</p>
            <p class="role">Li Shan</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Ke_Huy_Quan_at_the_White_House_%2852902390767%29_%28cropped%29.jpg/440px-Ke_Huy_Quan_at_the_White_House_%2852902390767%29_%28cropped%29.jpg">
            <p class="castname">Ke Huy Quan</p>
            <p class="role">Han</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Kung Fu Panda 4</h2>
      <p class="infoshow">2024   |   Comedy/Adventure    |    1h 34m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">--</p>
      </div>
      
    </div>

    <div class="space"></div>

    <?php renderReviewSection($movie_id, $movie_title, $movie_type); ?>

    <div class="space"></div>
    <div class="box5">
    <div class="otherrev">
      <h2 class="infotitle">Other Ratings</h2>
      <div class="ratetable">
        <table>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">8.5</td>
            <td><a class="footlink" href="johnwick4.php">John Wick: Chapter 4</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="fightclub.php">Fight Club</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
           <td> <a class="footlink" href="thewolfofwallstreet.php">Wolf of the Wall Street</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
            <td><a class="footlink" href="shangchi.php">Shang Chi and the Legend of the Ten Rings</a></td>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="bullettrain.php">Bullet Train</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.5</td>
            <td><a class="footlink" href="antman1.php">Ant Man 1</td></a>
          </tr>
        </table>
      </div>
      </div>
    </div>
<div class="space"></div>
<div class="space"></div>
<span class="footertext">All images from wikipedia and Information from google</span>
<div class="space"></div>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 8000); // Change image every 8 seconds
}
      </script>
</body>
</html>