<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'attackontitan';
$movie_title = 'Attack On Titan';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Attack on Titan - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Attack on Titan: An intense anime series set in a world where humanity battles for survival against monstrous Titans, with thrilling action, complex characters, and deep political intrigue." />

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
            <img src="../../assert/img/coverpics/attackontitan.webp" class="headimagem">
            <div class="text">
              <span class="headline">Attack on Titan</span>
              <p class="podidetails">2013 - 2023   |   Action    |    4 Seasons</p>
              <p class="details">Humankind constructs lofty walls to safeguard itself from immense creatures, the Titans. It battles to regain its land captured by the Titans which is not easy.</p>
              <p class="cast">Yuki Kaji | Marina Inoue | Yui Ishikawa</p>
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

        <p class="googleinfo">Humankind constructs lofty walls to safeguard itself from immense creatures, the Titans. It battles to regain its land captured by the Titans which is not easy.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2013</li>
          <li class="listdetails"><b class="boldd">Final episode year:</b>2023</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action</li>
          <li class="listdetails"><b class="boldd">Written by:</b>	Hajime Isayama</li>
          <li class="listdetails"><b class="boldd">Running time:</b>120m</li>
          <li class="listdetails"><b class="boldd">Studio:</b>WIT Studio & MAPPA</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/FIBD2023HajimeIsayama_01.jpg/440px-FIBD2023HajimeIsayama_01.jpg">
            <p class="castname">Hajime Isayama</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/27th_Tokyo_International_Film_Festival_Y%C5%ABki_Kaji.jpg/440px-27th_Tokyo_International_Film_Festival_Y%C5%ABki_Kaji.jpg">
            <p class="castname">Yuki Kaji</p>
            <p class="role">Eren Yeager
            </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVPKnaH3sxy1Abpjj1C-g8ogxKwTAXILNfTw&s">
            <p class="castname">Marina Inoue</p>
            <p class="role">Armin Arlert</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Jurassic_World_Fallen_Kingdom_Japan_Premiere_Red_Carpet_Ishikawa_Yui_%2843101892301%29.jpg/440px-Jurassic_World_Fallen_Kingdom_Japan_Premiere_Red_Carpet_Ishikawa_Yui_%2843101892301%29.jpg">
            <p class="castname">Yui Ishikawa</p>
            <p class="role">Mikasa Ackerman</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BMmI4ZmNkYjAtMzhlZC00ODFjLWIwOWItNjczODJlNzk5ZjM4XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_QL75_UY207_CR5,0,140,207_.jpg">
            <p class="castname">Hiroshi Kamiya</p>
            <p class="role">Levi Ackerman</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Attack On Titan</h2>
      <p class="infoshow">2013 - 2023   |   Action    |    4 Seasons</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">9.1</p>
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