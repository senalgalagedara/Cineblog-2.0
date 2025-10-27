<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'johnwick4';
$movie_title = 'John Wick 4';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>John Wick 4 - CINEBLOG</title>
    <meta name="description" content="John Wick 4: The relentless action continues as John Wick faces new enemies and deadly challenges in his quest for freedom and vengeance.">

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
            <img src="../../assert/img/coverpics/johnwick4.jpg" class="headimagem">
            <div class="text">
              <span class="headline">John Wick: Chapter 4 </span>
              <p class="podidetails">2023   |   Action/Thriller    |    2h 49m</p>
              <p class="details">With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.</p>
              <p class="cast">Jonathan Majors | Donnie Yen | Bill Skarsgård</p>
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

        <p class="googleinfo">With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> Mar 24, 2023</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action, thriller & mystery</li>
          <li class="listdetails"><b class="boldd">Director:</b>Chad Stahelski</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Basil Iwanyk,Erica Lee,</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$187M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 49m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Liongate</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Chad_Stahelski.jpg/440px-Chad_Stahelski.jpg">
            <p class="castname">Chad Stahelski</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Reuni%C3%A3o_com_o_ator_norte-americano_Keanu_Reeves_%2846806576944%29_%28cropped%29.jpg/440px-Reuni%C3%A3o_com_o_ator_norte-americano_Keanu_Reeves_%2846806576944%29_%28cropped%29.jpg">
            <p class="castname">Keanu Reeves</p>
            <p class="role">John Wick</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Bill_Skarsg%C3%A5rd_%2843620734441%29_%28cropped%29.jpg/440px-Bill_Skarsg%C3%A5rd_%2843620734441%29_%28cropped%29.jpg">
            <p class="castname">Bill Skarsgård</p>
            <p class="role">Marquis Vince</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Donnie_Yen_20230319.jpg/440px-Donnie_Yen_20230319.jpg">
            <p class="castname">Donnie Yen</p>
            <p class="role">Caine</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Hiroyuki_Sanada_2013_%28cropped%29.jpg/440px-Hiroyuki_Sanada_2013_%28cropped%29.jpg">
            <p class="castname">Hiroyuki Sanada</p>
            <p class="role">Shimazu Koji</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/PrimaveraBarcW1Jun22_%2851_of_318%29_%2852163776528%29_%28cropped%29.jpg/440px-PrimaveraBarcW1Jun22_%2851_of_318%29_%2852163776528%29_%28cropped%29.jpg">
            <p class="castname">Rina Sawayama</p>
            <p class="role">Akira</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">JOHN WICK: CHAPTER 4</h2>
      <p class="infoshow">2023   |   Action/Thriller    |    2h 49m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">8.5</p>
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