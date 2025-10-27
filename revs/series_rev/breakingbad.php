<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'breakingbad';
$movie_title = 'Breaking Bad';
$movie_type = 'series';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Breaking Bad - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Breaking Bad: Witness the transformation of Walter White, a high school chemistry teacher turned methamphetamine manufacturer. Experience the intense, thrilling story of crime, family, and survival." />

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
            <img src="../../assert/img/coverpics/breakingbad.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Breaking Bad</span>
              <p class="podidetails">2015 - 2022   |   Drama    |    5 Seasons</p>
              <p class="details">Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse.</p>
              <p class="cast">Bryan Cranston | Aaron Paul | Bob Odenkirk</p>
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

        <p class="googleinfo">Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2008</li>
          <li class="listdetails"><b class="boldd">Final episode date:</b>September 29, 2013</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Drama</li>
          <li class="listdetails"><b class="boldd">Created by:</b>Vince Gilligan</li>
          <li class="listdetails"><b class="boldd">Running time:</b>43 - 58m</li>
          <li class="listdetails"><b class="boldd">Network:</b>AMC</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Vince_Gilligan_by_Gage_Skidmore_3.jpg/440px-Vince_Gilligan_by_Gage_Skidmore_3.jpg">
            <p class="castname">Vince Gilligan</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/BryanCranston2022.jpg/440px-BryanCranston2022.jpg">
            <p class="castname">Bryan Cranston</p>
            <p class="role">Walter White</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Aaron_Paul_by_Gage_Skidmore_3.jpg/440px-Aaron_Paul_by_Gage_Skidmore_3.jpg">
            <p class="castname">Aaron Paul</p>
            <p class="role">Jesse Pinkman</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Bob_Odenkirk_by_Gage_Skidmore_2.jpg/440px-Bob_Odenkirk_by_Gage_Skidmore_2.jpg">
            <p class="castname">Bob Odenkirk</p>
            <p class="role">Saul Goodman</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Dean_Norris_by_Gage_Skidmore_3.jpg/440px-Dean_Norris_by_Gage_Skidmore_3.jpg">
            <p class="castname">Dean Norris</p>
            <p class="role">Hank Schrader</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Anna_Gunn_by_Gage_Skidmore_3.jpg/440px-Anna_Gunn_by_Gage_Skidmore_3.jpg">
            <p class="castname">Anna Gunn</p>
            <p class="role">Skiler White</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Breaking Bad</h2>
      <p class="infoshow">2008 - 2013   |   Drama    |    5 Seasons</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">9.5</p>
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