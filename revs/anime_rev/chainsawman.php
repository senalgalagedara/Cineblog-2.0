<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'chainsawman';
$movie_title = 'Chainsaw Man';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chainsaw Man - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Chainsaw Man: A dark, action-packed anime series following Denji, a young man who merges with his pet devil to become a chainsaw-wielding demon hunter, navigating a world filled with supernatural threats." />

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
            <img src="../../assert/img/coverpics3/chainsawman.png" class="headimagem">
            <div class="text">
              <span class="headline">Chainsaw Man</span>
              <p class="podidetails">2022   |   Action    |    1 Seasons</p>
              <p class="details">Betrayed and killed, a teenager named Denji gets revived as Chainsaw Man, a soul with a devil's heart.</p>
              <p class="cast">Tomori Kusunoki | Kikunosuke Toya | Shogo Sakata</p>
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

        <p class="googleinfo">Betrayed and killed, a teenager named Denji gets revived as Chainsaw Man, a soul with a devil's heart.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2013</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action</li>
          <li class="listdetails"><b class="boldd">Written by:</b>Tatsuki Fujimoto</li>
          <li class="listdetails"><b class="boldd">No of Episodes:</b>12 Episodes</li>
          <li class="listdetails"><b class="boldd">Studio:</b>MAPPA</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/FIBD2023HajimeIsayama_01.jpg/440px-FIBD2023HajimeIsayama_01.jpg">
            <p class="castname">Tatsuki Fujimoto</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://image.tmdb.org/t/p/original/4VM2qTY3WlhevpO4lTwLQoy78v7.jpg">
            <p class="castname">Tomori Kusunoki</p>
            <p class="role">Makima</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2oA417Uz9A1bbTD5wWmCzDRAZy59aNQl0qQ&s">
            <p class="castname">Kikunosuke Toya</p>
            <p class="role">Denji </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w235_and_h235_face/ul9LwUmDLIiDOplaUqKcPULeKwj.jpg">
            <p class="castname">Karin Takahashi</p>
            <p class="role">Kobeni </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/fRRPNBz3OCNRdmLdUTdpq7dGqxM.jpg">
            <p class="castname">Shogo Sakata</p>
            <p class="role">Aki Hayakawa</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Chainsaw Man</h2>
      <p class="infoshow">2022   |   Action    |    1 Seasons</p>
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