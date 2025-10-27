<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'dunepart2';
$movie_title = 'Dune Part 2';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dune: Part 2 - CINEBLOG</title>
    <meta name="description" content="Dune Part 2: The epic continuation of the sci-fi saga, following Paul Atreides as he leads a rebellion to free his desert planet from the tyrannical rule of House Harkonnen.">

    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <script src="../../assert/js/allwork.js" async></script>
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" async crossorigin="anonymous"></script>
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
            <img src="../../assert/img/coverpics/dune2.png" class="headimagem">
            <div class="text">
              <span class="headline">Dune: Part 2 </span>
              <p class="podidetails">2024   |   Sci-fi/Adventure    |    2h 46m</p>
              <p class="details">Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.</p>
              <p class="cast">Timothee Chalamet | Zendaya | Josh Brolin</p>
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

        <p class="googleinfo">Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> Feb 28, 2024</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Sci-fi & Adventure</li>
          <li class="listdetails"><b class="boldd">Director:</b>Denis Villeneuve</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Mary Parent, Cale Boyyer</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$388M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 46m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Warner Bros. Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Denis_Villeneuve_by_Gage_Skidmore.jpg/440px-Denis_Villeneuve_by_Gage_Skidmore.jpg">
            <p class="castname">Denis Villeneuve</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Interview_with_Timoth%C3%A9e_Chalamet%2C_2019.png/440px-Interview_with_Timoth%C3%A9e_Chalamet%2C_2019.png">
            <p class="castname">Timothee Chalamet</p>
            <p class="role">Paul Atreides</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Zendaya_-_2019_by_Glenn_Francis.jpg/440px-Zendaya_-_2019_by_Glenn_Francis.jpg">
            <p class="castname">Zendaya</p>
            <p class="role">Chani</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Premios_Goya_2018_-_Javier_Bardem_%28cropped%29.jpg/440px-Premios_Goya_2018_-_Javier_Bardem_%28cropped%29.jpg">
            <p class="castname">Javier Bardem</p>
            <p class="role">Stilgar</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Florence_Pugh_-_The_Wonder_BFI_London_Film_Festival_Premiere%2C_October_2022_%28cropped%29.jpg/440px-Florence_Pugh_-_The_Wonder_BFI_London_Film_Festival_Premiere%2C_October_2022_%28cropped%29.jpg">
            <p class="castname">Florence Pugh</p>
            <p class="role">Irulan</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Josh_Brolin_Berlin_2016.jpg/440px-Josh_Brolin_Berlin_2016.jpg">
            <p class="castname">Josh Brolin</p>
            <p class="role">Gurney Halleck</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">DUNE: CHAPTER 2</h2>
      <p class="infoshow">2024   |   Sci-fi/Adventure    |    2h 49m</p>
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
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">8.5</td>
            <td><a class="footlink" href="johnwick4.php">John Wick: Chapter 4</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="fightclub.php">Fight Club</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
           <td> <a class="footlink" href="thewolfofwallstreet.php">Wolf of the Wall Street</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
            <td><a class="footlink" href="shangchi.php">Shang Chi and the Legend of the Ten Rings</a></td>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="bullettrain.php">Bullet Train</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.5</td>
            <td><a class="footlink" href="antman1.php">Ant Man 1</td></a>
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