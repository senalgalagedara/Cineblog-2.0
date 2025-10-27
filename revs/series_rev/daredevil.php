<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'daredevil';
$movie_title = 'Daredevil';
$movie_type = 'series';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Daredevil - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Daredevil: Follow Matt Murdock, a blind lawyer by day and a vigilante by night, as he fights crime in Hell's Kitchen. Explore the dark, action-packed world of Marvel's Daredevil." />

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
            <img src="../../assert/img/coverpics3/daredevil.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Daredevil</span>
              <p class="podidetails">2015 - 2018   |   Action    |    3 Seasons</p>
              <p class="details">Matt Murdock manages to overcome the challenges that he faces due to him being blind since childhood and fights criminals as a lawyer and Daredevil.</p>
              <p class="cast">Charlie Cox | Vincent D'Onofrio | Deborah Ann Woll</p>
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

        <p class="googleinfo">Matt Murdock manages to overcome the challenges that he faces due to him being blind since childhood and fights criminals as a lawyer and Daredevil.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2015</li>
          <li class="listdetails"><b class="boldd">Final episode date:</b>October 19, 2018</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action</li>
          <li class="listdetails"><b class="boldd">Created by:</b>Drew Goddard</li>
          <li class="listdetails"><b class="boldd">Running time:</b>46 - 61m</li>
          <li class="listdetails"><b class="boldd">Network:</b>Netflix</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Drew_Goddard%2C_%22The_Cabin_in_the_Woods%22_World_Premiere_%28cropped%29.jpg">
            <p class="castname">Drew Goddard</p>
            <p class="role">Creater</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Charlie_Cox_by_Gage_Skidmore.jpg/440px-Charlie_Cox_by_Gage_Skidmore.jpg">
            <p class="castname">Charlie Cox</p>
            <p class="role">Matt Murdock</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Deborah_Ann_Woll_by_Gage_Skidmore_2.jpg/440px-Deborah_Ann_Woll_by_Gage_Skidmore_2.jpg">
            <p class="castname">Deborah Ann Woll</p>
            <p class="role">Karen Page</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Vincent_D%27Onofrio_%2853373945974%29.jpg/440px-Vincent_D%27Onofrio_%2853373945974%29.jpg">
            <p class="castname">Vincent D'Onofrio</p>
            <p class="role">KingPin</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Jon_Bernthal_by_Gage_Skidmore_2.jpg/440px-Jon_Bernthal_by_Gage_Skidmore_2.jpg">
            <p class="castname">Jon Bernthal</p>
            <p class="role">Frank Castle</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Daredevil</h2>
      <p class="infoshow">2015 - 2018   |   Action    |    3 Seasons</p>
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