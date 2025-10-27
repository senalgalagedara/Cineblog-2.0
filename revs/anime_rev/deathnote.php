<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'deathnote';
$movie_title = 'Death Note';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Death Note - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Death Note: A gripping psychological thriller anime about a high school student who gains the power to kill anyone by writing their name in a supernatural notebook, and the cat-and-mouse game that ensues with a brilliant detective." />

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
            <img src="../../assert/img/coverpics3/deathnote.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Death Note</span>
              <p class="podidetails">2006   |   Thriller    |    1 Seasons</p>
              <p class="details">A high-school student discovers a supernatural notebook that grants its user the ability to kill.</p>
              <p class="cast">Mamoru Miyano | Kappei Yamaguchi | Shogo Sakata</p>
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

        <p class="googleinfo">A high-school student discovers a supernatural notebook that grants its user the ability to kill.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2006</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Thriller</li>
          <li class="listdetails"><b class="boldd">Written by:</b>	Tsugumi Ohba</li>
          <li class="listdetails"><b class="boldd">No of Episodes:</b>37 Episodes</li>
          <li class="listdetails"><b class="boldd">Network:</b>Nippon TV</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="" alt="Tsugumi Ohba" style="color: white;">
            <p class="castname">	Tsugumi Ohba</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" alt="Mamoru Miyano" style="color: white;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Miyano_Mamoru_from_%22Human_Lost%22_at_Opening_Ceremony_of_the_Tokyo_International_Film_Festival_2019_%2849013608721%29.jpg/440px-Miyano_Mamoru_from_%22Human_Lost%22_at_Opening_Ceremony_of_the_Tokyo_International_Film_Festival_2019_%2849013608721%29.jpg">
            <p class="castname">Mamoru Miyano</p>
            <p class="role">Light Yagami</p>
          </div>
          <div class="castdit">
            <img class="castimg" alt="Kappei Yamaguchi" style="color: white;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Kappei_Yamaguchi_by_Gage_Skidmore.jpg/440px-Kappei_Yamaguchi_by_Gage_Skidmore.jpg">
            <p class="castname">Kappei Yamaguchi</p>
            <p class="role">L</p>
          </div>
          <div class="castdit">
            <img class="castimg" alt="Aya Hirano" style="color: white;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Aya_Hirano.jpg/440px-Aya_Hirano.jpg">
            <p class="castname">Aya Hirano</p>
            <p class="role">Misa Amane </p>
          </div>
          <div class="castdit">
            <img class="castimg"alt="Shidô Nakamura" style="color: white;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Nakamura_shidou_2010_8_29_2_%28cropped%29.jpg/440px-Nakamura_shidou_2010_8_29_2_%28cropped%29.jpg">
            <p class="castname">Shidô Nakamura</p>
            <p class="role">Ryuk</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Death Note</h2>
      <p class="infoshow">2006   |   Thriller    |    1 Seasons</p>
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