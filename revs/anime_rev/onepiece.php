<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'onepiece';
$movie_title = 'One Piece';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>One Piece - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="One Piece: An epic anime adventure following Monkey D. Luffy and his pirate crew as they search for the legendary One Piece treasure, facing formidable foes and uncovering secrets of the world." />

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
            <img src="../../assert/img/coverpics/onepiece.jpg" class="headimagem">
            <div class="text">
              <span class="headline">One Piece</span>
              <p class="podidetails">1999 - Present   |   Action    |    20 Seasons</p>
              <p class="details">Monkey D. Luffy wants to become the King of all pirates. Along his quest he meets: a skilled swordsman named Roronoa Zolo; Nami, a greedy thief who has a knack for navigation;</p>
              <p class="cast">Mayumi Tanaka | Kazuya Nakai | Hiroaki Hirata</p>
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

        <p class="googleinfo">Monkey D. Luffy wants to become the King of all pirates. Along his quest he meets: a skilled swordsman named Roronoa Zolo; Nami, a greedy thief who has a knack for navigation;</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>1999</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Adventure</li>
          <li class="listdetails"><b class="boldd">Written by:</b>Eiichiro Oda</li>
          <li class="listdetails"><b class="boldd">No. of Episodes:</b>1107++ Episodes</li>
          <li class="listdetails"><b class="boldd">Studio:</b>Taoi Animation</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://pm1.narvii.com/6975/66f03e973f0f797cfa3a11f8be6a8d32ceeb3f00r1-696-650v2_00.jpg">
            <p class="castname">Eiichiro Oda</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Mayumi_Tanaka_2023.jpg/440px-Mayumi_Tanaka_2023.jpg">
            <p class="castname">Mayumi Tanaka</p>
            <p class="role">Monkey D Luffy
            </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/78PKViY7brjF3AJI8h3tXyUyYT7.jpg">
            <p class="castname">Kazuya Nakai</p>
            <p class="role">Roronoa Zoro</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BMjNhNzgzY2ItZDQwNC00MmQ2LWJhMDUtODU3MTJkMDhkZmRkXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_.jpg">
            <p class="castname">Hiroaki Hirata</p>
            <p class="role">Sanji</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BMWQyNDZlMDEtMWEwNS00YTA4LTg0YmQtNTAzZmVjNTNkZTg3XkEyXkFqcGdeQXVyMzM4MjM0Nzg@._V1_.jpg">
            <p class="castname">Akemi Okamura</p>
            <p class="role">Nami</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">One Piece</h2>
      <p class="infoshow">1999 - Present   |   Action    |    20 Seasons</p>
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