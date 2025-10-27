<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'ginnenupanseethala';
$movie_title = 'Ginnenu Panseethala';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ginnen Upan Seethala - CINEBLOG</title>
    <meta name="description" content="Ginnen Upan Seethala: A powerful narrative that explores the intersection of personal sacrifice and societal change in a turbulent era.">

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
            <img src="../../assert/img/coverpics2/ginnenupanseethala.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Ginnen Upan Seethala</span>
              <p class="podidetails">2018   |  Drama/Thriller   |   2h 30m</p>
              <p class="details">Ginnen Upan Seethala is a 2019 Sinhala biographical film about Sri Lankan Marxist revolutionary Rohana Wijeweera directed by Anuruddha Jayasinghe</p>
              <p class="cast">Kamal Addararachchi | Jagath Manuwarna | Sulochana Weerasinghe</p>
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

        <p class="googleinfo">Ginnen Upan Seethala is a 2019 Sinhala biographical film about Sri Lankan Marxist revolutionary Rohana Wijeweera directed by Anuruddha Jayasinghe</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b>Sept 28, 2018</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Drama & Thriller</li>
          <li class="listdetails"><b class="boldd">Director:</b>Anuruddha Jayasinghe</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Chamathka Peiris</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>600 LKR lakhs</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 30m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>N/A</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://images.mubicdn.net/images/cast_member/622022/cache-339509-1526688006/image-w856.jpg?size=800x">
            <p class="castname">Anuruddha Jayasinghe</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://lk-aps.bmscdn.com/Artist/955.jpg">
            <p class="castname">Kamal Addararachchi</p>
            <p class="role">Rohana Wijevieera</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQcoG15wOgn28MKjLSbBAGSYcKj-5H2_FYqXVDnlS_ug&s">
            <p class="castname">Jagath Manuwarna</p>
            <p class="role">Upathissa Gamanayeke</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOUnw7--j0oYA-RCsVByaTj-DKDJv1bt2xWd0VP5nJgg&s">
            <p class="castname">Sulochana Weerasinghe</p>
            <p class="role">Chithrangani Wijevieera</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://images.mubicdn.net/images/cast_member/562924/cache-864942-1679678660/image-w856.jpg">
            <p class="castname">Priyantha Sirikumara</p>
            <p class="role">Lional Bopage</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Ginnen Upan Seethala</h2>
      <p class="infoshow">2018   |  Drama/Thriller   |   2h 30m</p>
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
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">8.0</td>
            <td><a class="footlink" href="thefallguy.php">The Fall Guy</td></a>
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