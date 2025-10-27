<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'bullettrain';
$movie_title = 'Bullet Train';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bullet Train - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name="description" content="Bullet Train: An action-packed thriller set on a high-speed train, where five assassins discover their missions are interconnected.">

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
            <img src="../../assert/img/coverpics/bullet-train-movie.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Bullet Train</span>
              <p class="podidetails">2022   |   Action/Comedy    |    2h 6m</p>
              <p class="details">Ladybug, a professional assassin, is assigned to retrieve a briefcase from a bullet train. Soon, he finds himself battling many other killers who board the same train but with a different objective.</p>
              <p class="cast">Brad Pitt  | Joey King | Brian Henry</p>
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

        <p class="googleinfo">Ladybug, a professional assassin, is assigned to retrieve a briefcase from a bullet train. Soon, he finds himself battling many other killers who board the same train but with a different objective.
        </p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> Aug 5, 2021</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action & Comedy</li>
          <li class="listdetails"><b class="boldd">Director:</b>David Leitch</li>
          <li class="listdetails"><b class="boldd">Producer:</b>David Leitch,Kelly</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$239M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 6m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Sony Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/David_Leitch_by_Gage_Skidmore.jpg/440px-David_Leitch_by_Gage_Skidmore.jpg">
            <p class="castname">David Leitch</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Brad_Pitt_2019_by_Glenn_Francis.jpg/316px-Brad_Pitt_2019_by_Glenn_Francis.jpg">
            <p class="castname">Brad Pitt</p>
            <p class="role">Ladybug</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Joey_King_for_Vanity_Fair-Vogue_Taiwan_2020.png/440px-Joey_King_for_Vanity_Fair-Vogue_Taiwan_2020.png">
            <p class="castname">Joey King</p>
            <p class="role">Prince</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/MichaelShannon-byPhilipRomano.jpg/440px-MichaelShannon-byPhilipRomano.jpg">
            <p class="castname">Michael Shannon</p>
            <p class="role">The White Death</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Hiroyuki_Sanada_2013_%28cropped%29.jpg/440px-Hiroyuki_Sanada_2013_%28cropped%29.jpg">
            <p class="castname">Hiroyuki Sanada</p>
            <p class="role">Shimazu Koji</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Aaron_Taylor-Johnson_SDCC_2014_%28cropped%29.jpg/440px-Aaron_Taylor-Johnson_SDCC_2014_%28cropped%29.jpg">
            <p class="castname">Aaron Johnson</p>
            <p class="role">Tangerine</p>
          </div>
        </div>
      </div>
      
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">BULLET TRAIN</h2>
      <p class="infoshow">2022   |   Action/Comedy    |    2h 6m</p>
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