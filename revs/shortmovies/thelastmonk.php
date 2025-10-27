<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'thelastmonk';
$movie_title = 'The Last Monk';
$movie_type = 'short';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>3 Idiotss - CINEBLOG</title>
    <meta name="description" content="3 Idiots: A heartwarming and hilarious Bollywood film about three engineering students navigating college life, friendship, and personal dreams.">

    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <script src="../../assert/js/allwork.js" async></script>
    
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
            <img src="../../assert/img/coverpics2/3idiots.jpg" class="headimagem">
            <div class="text">
              <span class="headline">3 Idiots</span>
              <p class="podidetails">2009   |   Comedy/Romance    |    2h 50m</p>
              <p class="details"> In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.</p>
              <p class="cast">Aamir Khan| Sharman Joshi | R. Madhavan</p>
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

        <p class="googleinfo"> In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b>Dec 25, 2009 </li>
          <li class="listdetails"><b class="boldd">Genre:</b>Comedy & Romance</li>
          <li class="listdetails"><b class="boldd">Director:</b>Rajkumar Hirani</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Vidhu Vinod Chopra</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$48M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 50m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>	Reliance BIG Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Rajkumar_Hirani_2014.jpg">
            <p class="castname">Rajkumar Hirani</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Aamir_Khan_at_the_success_bash_of_Secret_Superstar.jpg/440px-Aamir_Khan_at_the_success_bash_of_Secret_Superstar.jpg">
            <p class="castname">Aamir Khan</p>
            <p class="role">Rancho</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Sharman_Joshi_still3.jpg/440px-Sharman_Joshi_still3.jpg">
            <p class="castname">Sharman Joshi</p>
            <p class="role">Raju Rastogi</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Madhavan_Saala_Khadoos_%28cropped%29.jpg">
            <p class="castname">R. Madhavan</p>
            <p class="role">Farhan Qureshi</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/2/29/Kareena_Kapoor_Khan_in_2023_%281%29_%28cropped%29.jpg">
            <p class="castname">Kareena Kapoor</p>
            <p class="role">Pia</p>
          </div>
        </div>
      </div>
    </div>

    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">3 Idiots</h2>
      <p class="infoshow">2009   |   Comedy/Romance    |    2h 50m</p>
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
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">8.0</td>
            <td><a class="footlink" href="thefallguy.php">The Fall Guy</td></a>
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