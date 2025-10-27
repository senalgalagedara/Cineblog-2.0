<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'godzillaxkong';
$movie_title = 'Godzilla x Kong';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Godzilla x Kong: The New Empire- CINEBLOG</title>
    <meta name="description" content="Godzilla x Kong: An epic showdown between two iconic titans, as they battle for supremacy while humanity looks for a way to coexist with these colossal forces.">

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
            <img src="../../assert/img/coverpics2/kongxgodzia.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Godzilla x Kong: The New Empire </span>
              <p class="podidetails">2024   |   Action/Sci-fi    |    1h 55m</p>
              <p class="details">Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.</p>
              <p class="cast">Kaylee Hottle | Rebecca Hall | Dan Stevens</p>
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

        <p class="googleinfo">Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> March 28, 2024</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action & Sci-fi</li>
          <li class="listdetails"><b class="boldd">Director:</b>Adam Wingard</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Thomas Tull,Jon Jashni,Mary Parent..</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$563.8M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 55m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Warner Bros. Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Adam_Wingard_by_Gage_Skidmore.jpg/440px-Adam_Wingard_by_Gage_Skidmore.jpg">
            <p class="castname">Adam Wingard</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://m.media-amazon.com/images/M/MV5BMTg4YjU4NjItNjNmNi00NTg4LTgwZjktNmE0YzhjYWY1ZjAzXkEyXkFqcGdeQXVyMTAwNDIwNDgx._V1_.jpg">
            <p class="castname">Kaylee Hottle</p>
            <p class="role">Jia</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Rebecca_Hall_Berlinale_2010_cropped.jpg/440px-Rebecca_Hall_Berlinale_2010_cropped.jpg">
            <p class="castname">Rebecca Hall</p>
            <p class="role">Dr. Ilene Andrews</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Dan_Stevens_by_Gage_Skidmore_3.jpg/440px-Dan_Stevens_by_Gage_Skidmore_3.jpg">
            <p class="castname">Dan Stevens</p>
            <p class="role">Trapper</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Brian_Tyree_Henry_by_Gage_Skidmore.jpg/440px-Brian_Tyree_Henry_by_Gage_Skidmore.jpg">
            <p class="castname">Brian Tyree Henry</p>
            <p class="role">Barnie Hayes</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="space"></div>

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Godzilla x Kong: The New Empire</h2>
      <p class="infoshow">2024   |   Action/Sci-fi    |    1h 55m</p>
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

    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Godzilla x Kong: The New Empire</h2>
      <p class="infoshow">2024   |   Action/Sci-fi    |    1h 55m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">--</p>
      </div>
      
    </div>

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