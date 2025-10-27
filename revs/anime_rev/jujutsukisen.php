<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'jujutsukisen';
$movie_title = 'Jujutsu Kaisen';
$movie_type = 'anime';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jujutsu Kaisen - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="Jujutsu Kaisen: An action-packed anime series following Yuji Itadori, a high school student who joins a secret organization of sorcerers to battle curses after ingesting a powerful cursed object." />

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
            <img src="../../assert/img/coverpics3/jujutsu kaisen.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Jujutsu Kaisen</span>
              <p class="podidetails">2020 - Present   |   Action    |    2 Seasons</p>
              <p class="details">After a boy is thrust into the world of the supernatural, he must rise to the challenge in order to prevent demons from obliterating all that he holds dear.</p>
              <p class="cast">Yuki Kaji | Kenjiro Tsuda | Yuichi Nakamura</p>
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

        <p class="googleinfo">After a boy is thrust into the world of the supernatural, he must rise to the challenge in order to prevent demons from obliterating all that he holds dear.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2020</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action</li>
          <li class="listdetails"><b class="boldd">Written by:</b>Gege Akutami</li>
          <li class="listdetails"><b class="boldd">No. of Episodes:</b>47 Episodes</li>
          <li class="listdetails"><b class="boldd">Studio:</b>MAPPA</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="" alt="Gege Akutami" style="color: white;">
            <p class="castname">Gege Akutami</p>
            <p class="role">Writter</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/vBnNL3Jqy0zkS3ZgsXZmvDM9Dfz.jpg">
            <p class="castname">Junya Enoki</p>
            <p class="role">Yuji Itadori
            </p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Tsuda_Kenjiro_from_%22The_Concierge%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853348306038%29.jpg/440px-Tsuda_Kenjiro_from_%22The_Concierge%22_at_Red_Carpet_of_the_Tokyo_International_Film_Festival_2023_%2853348306038%29.jpg">
            <p class="castname">Kenjiro Tsuda</p>
            <p class="role">Kento Nanami</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Nakamura_Yuichi_from_%22Genocidal_Organ%22_at_Opening_Ceremony_of_the_Tokyo_International_Film_Festival_2016_%2833603427406%29.jpg/440px-Nakamura_Yuichi_from_%22Genocidal_Organ%22_at_Opening_Ceremony_of_the_Tokyo_International_Film_Festival_2016_%2833603427406%29.jpg">
            <p class="castname">Yuichi Nakamura</p>
            <p class="role">Satoro Gojo</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.themoviedb.org/t/p/w500/oDmxr5gprWrj6osczaWUJURq1i8.jpg">
            <p class="castname">Asami Seto</p>
            <p class="role">Nobara Kugisaki</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Jujutsu Kaisen</h2>
      <p class="infoshow">2020 - Present   |   Action    |    2 Seasons</p>
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