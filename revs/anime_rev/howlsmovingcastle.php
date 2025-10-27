<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'howlsmovingcastle';
$movie_title = 'Howls Moving Castle';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Howl's Moving Castle - CINEBLOG</title>
    <meta name="description" content="Howl's Moving Castle: A visually stunning Studio Ghibli film where a young woman, cursed to age rapidly, seeks help from the enigmatic wizard Howl and becomes entangled in a magical and wartime adventure." />

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
            <img src="../../assert/img/coverpics3/howlsmovingcastle.webp" class="headimagem">
            <div class="text">
              <span class="headline">Howl's Moving Castle</span>
              <p class="podidetails">2004     |   Fantasy/Adventure    |    1h 59m</p>
              <p class="details">Jealous of Sophie's closeness to Howl, a wizard, the Witch of Waste transforms her into an old lady. Sophie must find a way to break the spell with the help of Howl's friends, Calcifer and Markl.</p>
              <p class="cast">Takuya Kimura | Emily Mortimer | Tatsuya Gashuin</p>
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

        <p class="googleinfo">Jealous of Sophie's closeness to Howl, a wizard, the Witch of Waste transforms her into an old lady. Sophie must find a way to break the spell with the help of Howl's friends, Calcifer and Markl.</p>
        <ul>
            <li class="listdetails"><b class="boldd">Release Date:</b>November 20, 2004</li>
            <li class="listdetails"><b class="boldd">Genre:</b>Fantasy & Adventure</li>
            <li class="listdetails"><b class="boldd">Director:</b> Hayao Miyazaki</li>
            <li class="listdetails"><b class="boldd">Producer:</b>	Toshio Suzuki</li>
            <li class="listdetails"><b class="boldd">Box Office:</b>$236M</li>
            <li class="listdetails"><b class="boldd">Duration:</b>1h 59m</li>
            <li class="listdetails"><b class="boldd">Distributer:</b>Toho</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Hayao_Miyazaki_cropped_1_Hayao_Miyazaki_201211.jpg/440px-Hayao_Miyazaki_cropped_1_Hayao_Miyazaki_201211.jpg">
            <p class="castname"> Hayao Miyazaki</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/7/71/%E6%9C%A8%E6%9D%91%E6%8B%93%E5%93%89.png">
            <p class="castname">Takuya Kimura</p>
            <p class="role">Wizard Howl</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Premios_Goya_2018_-_Emily_Mortimer_%28cropped%29_%28cropped%29.jpg/440px-Premios_Goya_2018_-_Emily_Mortimer_%28cropped%29_%28cropped%29.jpg">
            <p class="castname">Emily Mortimer</p>
            <p class="role">Young Sophie</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BNzkwYTU0MTYtYTVhMC00NGQ3LWJkZmUtOWFlYzhmMDI3MzdmXkEyXkFqcGdeQXVyMjg0MTI5NzQ@._V1_.jpg">
            <p class="castname">Tatsuya Gashuin</p>
            <p class="role">Calcifer</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Chieko_Baish%C5%8D_at_the_Tokyo_International_Film_Festival_2019_%2849013476248%29_%28cropped%29.jpg/440px-Chieko_Baish%C5%8D_at_the_Tokyo_International_Film_Festival_2019_%2849013476248%29_%28cropped%29.jpg">
            <p class="castname">Chieko Baisho</p>
            <p class="role">Sophie Hatter</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Howl's Moving Castle</h2>
      <p class="infoshow">2004     |   Fantasy/Adventure    |    1h 59m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">--</p>
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