<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'whatif';
$movie_title = 'What If...?';
$movie_type = 'series';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>What If...? - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="What If...? Explore alternate realities within the Marvel Universe, where familiar characters face different destinies. A unique animated series that reimagines pivotal moments from the MCU." />

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
            <img src="../../assert/img/coverpics3/whatif.jpg" class="headimagem">
            <div class="text">
              <span class="headline">What If...?</span>
              <p class="podidetails">2021 - Present   |   Action    |    2 Seasons</p>
              <p class="details">Reimagining noteworthy events in the Marvel Cinematic Universe and creating a multiverse of infinite possibilities.</p>
              <p class="cast">Jeffrey Wright | Benedict Cumberbatch | Hayley Atwell</p>
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

        <p class="googleinfo">Reimagining noteworthy events in the Marvel Cinematic Universe and creating a multiverse of infinite possibilities.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2021</li>
          <li class="listdetails"><b class="boldd">Number of seasons:</b>2 Seasons</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action</li>
          <li class="listdetails"><b class="boldd">Created by:</b>A. C. Bradley</li>
          <li class="listdetails"><b class="boldd">Running time:</b>30 - 37m</li>
          <li class="listdetails"><b class="boldd">Network:</b>Disney+</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/AC_Bradley_by_Gage_Skidmore.jpg/440px-AC_Bradley_by_Gage_Skidmore.jpg">
            <p class="castname">A. C. Bradley</p>
            <p class="role">Creater</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Jeffrey_Wright_by_Gage_Skidmore_3.jpg/440px-Jeffrey_Wright_by_Gage_Skidmore_3.jpg">
            <p class="castname">Jeffrey Wright</p>
            <p class="role">The Watcher</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Hayley_Atwell_at_Awesome_Con_2022_DC_%28cropped%29.jpg/440px-Hayley_Atwell_at_Awesome_Con_2022_DC_%28cropped%29.jpg">
            <p class="castname">Hayley Atwell</p>
            <p class="role">Peggy Carter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/BCumberbatch_Comic-Con_2019.jpg/440px-BCumberbatch_Comic-Con_2019.jpg">
            <p class="castname">Benedict Cumberbatch</p>
            <p class="role">Dr. Strange</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Chris_Hemsworth_by_Gage_Skidmore_2_%28cropped%29.jpg/440px-Chris_Hemsworth_by_Gage_Skidmore_2_%28cropped%29.jpg">
            <p class="castname">Chris Hemsworth</p>
            <p class="role">Thor</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">What If...?</h2>
      <p class="infoshow">2021 - Present   |   Action    |    2 Seasons</p>
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
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="breakingbad.php">Breaking Bad</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="bettercallsaul.php">Better Call Saul</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="gameofthrones.php">Game of Thrones</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
           <td> <a class="footlink" href="moneyheist.php">Money Heist</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
            <td><a class="footlink" href="prisonbreak.php">Prison Break</a></td>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="loki.php">Loki</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.1</td>
            <td><a class="footlink" href="peacemaker.php">Peacemaker</td></a>
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