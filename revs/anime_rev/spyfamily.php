<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'spyfamily';
$movie_title = 'Spy Family';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Spy x Family - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Spy x Family: A comedic and heartwarming anime series about a master spy who must build a fake family for a mission, only to discover that his new wife is an assassin and his adopted daughter is a telepath." />

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
            <img src="../../assert/img/coverpics3/spyxfamily.webp" class="headimagem">
            <div class="text">
              <span class="headline">Spy x Family</span>
              <p class="podidetails">2022 - 2023   |   Comedy    |    2 Seasons</p>
              <p class="details">Agent Twilight, the greatest spy of the nation of Westalis, assembles a fake family in order to infiltrate an elite private school, not realizing he recruited a psychic child and a legendary assassin also in need of a cover family.</p>
              <p class="cast">Takuya Eguchi | Takuya Eguchi | Saori Hayami</p>
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

        <p class="googleinfo">Agent Twilight, the greatest spy of the nation of Westalis, assembles a fake family in order to infiltrate an elite private school, not realizing he recruited a psychic child and a legendary assassin also in need of a cover family.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2022</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Comedy</li>
          <li class="listdetails"><b class="boldd">Written by:</b>	Tatsuya Endo</li>
          <li class="listdetails"><b class="boldd">Studio:</b>WIT Studio</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/vfQBWOKFztXYexzNmKmaFJ8hT0E.jpg">
            <p class="castname">Tatsuya Endo</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/6tM8GU7QvrdUCvR4kxqVUZivtvO.jpg">
            <p class="castname">Takuya Eguchi</p>
            <p class="role">Anya Forger
            </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Takuya_Eguchi_%E6%B1%9F%E5%8F%A3_%E6%8B%93%E4%B9%9F_2022.jpg/440px-Takuya_Eguchi_%E6%B1%9F%E5%8F%A3_%E6%8B%93%E4%B9%9F_2022.jpg">
            <p class="castname">Takuya Eguchi</p>
            <p class="role">Loid Forger</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Hayami_Saori_from_%22Komada_-A_Whisky_Family-%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853348308348%29_%28cropped%29.jpg/440px-Hayami_Saori_from_%22Komada_-A_Whisky_Family-%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853348308348%29_%28cropped%29.jpg">
            <p class="castname">Saori Hayami</p>
            <p class="role">Yor Forger</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/xi0drere8viJnhtTAzVdbdw5Pov.jpg">
            <p class="castname">Natsumi Fujiwara</p>
            <p class="role">Damian Desmond
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Spy x Family</h2>
      <p class="infoshow">2022 - 2023   |   Comedy    |    2 Seasons</p>
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