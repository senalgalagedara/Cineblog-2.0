<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'naruto';
$movie_title = 'Naruto';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Naruto - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Naruto: A beloved anime series chronicling the journey of Naruto Uzumaki, a young ninja with dreams of becoming the strongest ninja and earning the respect of his village, filled with adventure, friendship, and battles." />

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
            <img src="../../assert/img/coverpics/naruto.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Naruto</span>
              <p class="podidetails">2002 - 2017   |   Adventure    |    10 Seasons</p>
              <p class="details">Naruto, a teenage ninja, embarks on various adventures with his friends and trains hard to become the Hokage. However, he must prove his mettle in order to be successful in his quest.</p>
              <p class="cast">Junko Takeuchi | Noriaki Sugiyama | Kazuhiko Inoue</p>
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

        <p class="googleinfo">Naruto, a teenage ninja, embarks on various adventures with his friends and trains hard to become the Hokage. However, he must prove his mettle in order to be successful in his quest.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2002</li>
          <li class="listdetails"><b class="boldd">Final episode year:</b>2017</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Adventure</li>
          <li class="listdetails"><b class="boldd">Written by:</b>Masashi Kishimoto</li>
          <li class="listdetails"><b class="boldd">Studio:</b>Pierrot</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/8hoQQiQEak3HxCDhEIDcAZ8QI41.jpg">
            <p class="castname">Masashi Kishimoto</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Junko_Takeuchi_-_Dimanche_-_Japan_Expo_2013_-_P1670498.jpg/440px-Junko_Takeuchi_-_Dimanche_-_Japan_Expo_2013_-_P1670498.jpg">
            <p class="castname">Junko Takeuchi</p>
            <p class="role">Naruto Uzumaki
            </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/szqqQ8T0gzuSxjU2rnWcthsaSJT.jpg">
            <p class="castname">Noriaki Sugiyama</p>
            <p class="role">Sasuke Uchiha</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BOWM0MjI1ZDktZGJiZi00MWZkLWJhYjgtZmU4OTg1NmY2ZDY5XkEyXkFqcGdeQXVyMzM4MjM0Nzg@._V1_.jpg">
            <p class="castname">Kazuhiko Inoue</p>
            <p class="role">Kakashi Hatake</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/evB6vKUbm0CKgBcgikPeFXdwd29.jpg">
            <p class="castname">Chie Nakamura</p>
            <p class="role">Sakura Haruno</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Naruto</h2>
      <p class="infoshow">2002 - 2017   |   Adventure    |    10 Seasons</p>
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