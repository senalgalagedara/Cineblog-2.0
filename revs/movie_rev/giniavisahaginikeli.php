<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'giniavisahaginikeli';
$movie_title = 'Ginia Visa Hagini Keli';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Gini Avi Saha Gini Keli - CINEBLOG</title>
    <meta name="description" content="Gini Avisaha Gini Keli: A compelling drama that delves into societal issues and personal struggles, highlighting the strength of the human spirit.">

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
            <img src="../../assert/img/coverpics2/Gini_Avi_Saha_Gini_Keli_Movie_Main_Banner.tiff.png" class="headimagem">
            <div class="text">
              <span class="headline">Gini Avi Saha Gini Keli</span>
              <p class="podidetails">1998   |   Drama/Action    |    1h 30m</p>
              <p class="details">The plot revolves around the ascension and downfall of Padmasiri, a gang leader in Sri Lanka.</p>
              <p class="cast">Jackson Anthony| Sriyantha Mendis | Mahendra Perera</p>
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

        <p class="googleinfo">The plot revolves around the ascension and downfall of Padmasiri, a gang leader in Sri Lanka.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b>Jan 16, 1998 </li>
          <li class="listdetails"><b class="boldd">Genre:</b>Drama & Action</li>
          <li class="listdetails"><b class="boldd">Director:</b>Udayakantha Warnasuriya</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Ranjith Jayasuriya</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>N/A</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 30m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>N/A</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://media.licdn.com/dms/image/C4E03AQH59A4z93lZYg/profile-displayphoto-shrink_200_200/0/1517482968888?e=2147483647&v=beta&t=XMbT5pHZrC7CRWMNxaEzVZGq3sf88CsuqzTrTIVKX2U">
            <p class="castname">Udayakantha Warnasuriya</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/en/2/2f/Jackson_Anthony_resize.jpg">
            <p class="castname">Jackson Anthony</p>
            <p class="role">Padmasiri</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://lk-aps.bmscdn.com/Artist/1815.jpg">
            <p class="castname">Sriyantha Mendis</p>
            <p class="role">Addarawaththe Lokayaa</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr3HHgMJx5fh_2Sw5gCx2nE-LYM_QC5UIeOKW9uHaVTw&s">
            <p class="castname">Mahendra Perera</p>
            <p class="role">Sammy</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnZUY_Ze_g_rDSHLgHIGYn1HXOqtH6NfKpEH3iAM7HPw&s">
            <p class="castname">Rangana Premaratne</p>
            <p class="role">Police Inspector</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Gini Avi Saha Gini Keli</h2>
      <p class="infoshow">1998   |   Drama/Action    |    1h 30m</p>
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