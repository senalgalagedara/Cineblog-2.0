<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'barbie';
$movie_title = 'Barbie';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Barbie - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name="description" content="Barbie: A fun and adventurous film following the iconic doll, Barbie, as she embarks on a journey of self-discovery and empowerment.">

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
            <img src="../../assert/img/coverpics/barbie.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Barbie </span>
              <p class="podidetails">2023   |   Comaedy/Fantasy    |    1h 54m</p>
              <p class="details">Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.</p>
              <p class="cast">Ryan Gosling | Margot Robbie | Simu Liu</p>
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

        <p class="googleinfo">Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> July 21, 2023</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Comedy & Fantasy</li>
          <li class="listdetails"><b class="boldd">Director:</b>Greta Gerwig</li>
          <li class="listdetails"><b class="boldd">Producer:</b>David Heyman, Margot Robbie</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$1.4B</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 54m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Warner Bros. Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Greta_Gerwig_at_Barbie_Movie_Reception_%28headshot%29.jpg/440px-Greta_Gerwig_at_Barbie_Movie_Reception_%28headshot%29.jpg">
            <p class="castname">Greta Gerwig</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/GoslingBFI081223_%2822_of_30%29_%2853388157347%29_%28cropped%29.jpg/440px-GoslingBFI081223_%2822_of_30%29_%2853388157347%29_%28cropped%29.jpg">
            <p class="castname">Ryan Gosling</p>
            <p class="role">Ken</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Simu_Liu_by_Gage_Skidmore.jpg/440px-Simu_Liu_by_Gage_Skidmore.jpg">
            <p class="castname">Simu Liu</p>
            <p class="role">Ken</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Margot_Robbie_Vogue_Barbie_2023_03.jpg/440px-Margot_Robbie_Vogue_Barbie_2023_03.jpg">
            <p class="castname">Margot Robbie</p>
            <p class="role">Barbie</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Emma_Mackey_%282%29.jpg/440px-Emma_Mackey_%282%29.jpg">
            <p class="castname">Emma Macjey</p>
            <p class="role">barbie</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Will_Ferrell_2012.jpg">
            <p class="castname">Will Ferrell</p>
            <p class="role">Mattel CEO</p>
          </div>
        </div>
      </div>
      
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">BARBIE</h2>
      <p class="infoshow">2023   |   Comedy/Fantasy    |    1h 54m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">9.0</p>
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