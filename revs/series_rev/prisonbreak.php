<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'prisonbreak';
$movie_title = 'Prison Break';
$movie_type = 'series';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Prison Break - CINEBLOG</title>
    <meta name="description" content="Prison Break: Follow Michael Scofield as he devises an elaborate plan to break his brother out of prison. A high-stakes drama filled with suspense, twists, and edge-of-your-seat moments." />

    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
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
            <img src="coverpics/prisonbreak.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Prison Break</span>
              <p class="podidetails">2005- 2017   |   Drama    |    5 Seasons</p>
              <p class="details">Michael Scofield finds himself in the Ogygia Prison in Sana'a, Yemen, seven years after his apparent death. His friends, brother and fellow escapee do everything it takes to bring him home.</p>
              <p class="cast">Wentworth Miller | Dominic Purcell | Sarah Wayne</p>
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

        <p class="googleinfo">Michael Scofield finds himself in the Ogygia Prison in Sana'a, Yemen, seven years after his apparent death. His friends, brother and fellow escapee do everything it takes to bring him home.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2005</li>
          <li class="listdetails"><b class="boldd">Final episode date:</b>May 30, 2017</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Drama</li>
          <li class="listdetails"><b class="boldd">Created by:</b>Paul Scheuring</li>
          <li class="listdetails"><b class="boldd">Running time:</b>42 - 44m</li>
          <li class="listdetails"><b class="boldd">Network:</b>FOX</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlr3cbXQBZNLnWdzrW7pptHiYDulULLHcOXg4ngIi3Ig&s">
            <p class="castname">Paul Scheuring</p>
            <p class="role">Creater</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Wentworth_Miller_by_Gage_Skidmore.jpg/440px-Wentworth_Miller_by_Gage_Skidmore.jpg">
            <p class="castname">Wentworth Miller</p>
            <p class="role">Michael Scofield</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Dominic_Purcell_by_Gage_Skidmore_2_%28cropped%29.jpg/440px-Dominic_Purcell_by_Gage_Skidmore_2_%28cropped%29.jpg">
            <p class="castname">Dominic Purcell</p>
            <p class="role">Lincoln Burrows</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Sarah_Wayne_Callies_by_Gage_Skidmore_2.jpg/440px-Sarah_Wayne_Callies_by_Gage_Skidmore_2.jpg">
            <p class="castname">Sarah Wayne</p>
            <p class="role">Dr. Sara</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Robert_Knepper_Brussels_2016.jpg/440px-Robert_Knepper_Brussels_2016.jpg">
            <p class="castname">Robert Knepper</p>
            <p class="role">T-bag</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Prison Break</h2>
      <p class="infoshow">2005- 2017   |   Drama    |    5 Seasons</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">7.0</p>
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