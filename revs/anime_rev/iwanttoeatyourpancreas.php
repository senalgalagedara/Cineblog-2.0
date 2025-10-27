<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'iwanttoeatyourpancreas';
$movie_title = 'I Want to Eat Your Pancreas';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>I Want to Eat Your Pancreas - CINEBLOG</title>
    <meta name="description" content="I Want to Eat Your Pancreas: A touching and emotional anime film about an introverted boy who forms a deep bond with a terminally ill girl, learning the value of life and friendship through their shared time together." />

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
            <img src="../../assert/img/coverpics3/iwanttoeatyourpances.webp" class="headimagem">
            <div class="text">
              <span class="headline">I Want to Eat Your Pancreas</span>
              <p class="podidetails">2018     |   Romance/Drama    |    1h 48m</p>
              <p class="details">A high school student discovers one of his classmates, Sakura Yamauchi, is suffering from a terminal illness. This secret brings the two together, as she lives out her final moments.</p>
              <p class="cast">Mahiro Takasugi | Minami Hamabe | Yukiyo Fujii</p>
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

        <p class="googleinfo">A high school student discovers one of his classmates, Sakura Yamauchi, is suffering from a terminal illness. This secret brings the two together, as she lives out her final moments.</p>
        <ul>
            <li class="listdetails"><b class="boldd">Release Date:</b>September 1, 2018</li>
            <li class="listdetails"><b class="boldd">Genre:</b>Drama & Romance</li>
            <li class="listdetails"><b class="boldd">Director:</b>Shin'ichirô Ushijima</li>
            <li class="listdetails"><b class="boldd">Producer:</b>Eharu Ōhashi</li>
            <li class="listdetails"><b class="boldd">Box Office:</b>$6.2M</li>
            <li class="listdetails"><b class="boldd">Duration:</b>1h 48m</li>
            <li class="listdetails"><b class="boldd">Distributer:</b>Aniplex</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNO09xb5vFZMiH3aiMKzlQF2WE8R1zbDJkLw&s">
            <p class="castname">Shin'ichirô Ushijima</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/gP5lShrAl4ovliqAqJQTgrTeEwz.jpg">
            <p class="castname">Mahiro Takasugi</p>
            <p class="role">Boku</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Hamabe_Minami_from_%22Godzilla_Minus_One%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853347905526%29_%28cropped%29.jpg/500px-Hamabe_Minami_from_%22Godzilla_Minus_One%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853347905526%29_%28cropped%29.jpg">
            <p class="castname">Minami Hamabe</p>
            <p class="role">Sakura Yamauchi</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/p3eGgmGqHPGAEhsFoUfJkyt1QTB.jpg">
            <p class="castname">Yukiyo Fujii</p>
            <p class="role">Kyoko</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/gHv2Nw6LAC6OdNuC8tzmW36CHpM.jpg">
            <p class="castname">Jun Fukushima            </p>
            <p class="role">Gum Boy</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">I Want to Eat Your Pancreas</h2>
      <p class="infoshow">2018     |   Romance/Drama    |    1h 48m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">8.0</p>
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
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="yourname.php">Your Name</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="ponyo.php">Ponyo</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">8.0</td>
              <td><a class="footlink" href="iwanttoeatyourpancreas.php">I Want to Eat Your Pancreas</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
             <td> <a class="footlink" href="asilentvoice.php">A Silent Voice</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
              <td><a class="footlink" href="thegardenofwords.php">The Gardern Of Words</a></td>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
              <td><a class="footlink" href="onepiece.php">One Piece</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.1</td>
              <td><a class="footlink" href="attackontitan.php">Attack On Titan</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="naruto.php">Naruto</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="jujutsukisen.php">Jujutsu-Kaisen</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="deathnote.php">Death Note</td></a>
            </tr>
            <tr>
              <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
              <td><a class="footlink" href="chainsawman.php">Chainsaw Man</td></a>
            </tr>
          </table>
      </div>
      </div>
    </div>
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