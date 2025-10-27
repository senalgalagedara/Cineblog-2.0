<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'shawshankredemption';
$movie_title = 'The Shawshank Redemption';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>The Shawshank Redemption - CINEBLOG</title>
    <meta name="description" content="The Shawshank Redemption: A timeless drama about hope and friendship, set in a prison where two inmates form an unbreakable bond.">

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
            <img src="../../assert/img/coverpics2/theshawshankredemption.jpg" class="headimagem">
            <div class="text">
              <span class="headline">The Shawshank Redemption</span>
              <p class="podidetails">1994   |   Crime/Thriller    |    2h 22m</p>
              <p class="details">Andy Dufresne, a successful banker, is arrested for the murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison. He becomes the most unconventional prisoner.</p>
              <p class="cast">Tim Robbins | Morgan Freeman | Clancy Brown</p>
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

        <p class="googleinfo">Andy Dufresne, a successful banker, is arrested for the murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison. He becomes the most unconventional prisoner.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b>October 14, 1994</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Crime & Thriller</li>
          <li class="listdetails"><b class="boldd">Director:</b>Frank Darabon</li>
          <li class="listdetails"><b class="boldd">Producer:</b>	Niki Marvin</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$73.3M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>2h 22m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>	Columbia Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/TheKillerBFILFF051023_%288_of_22%29_%2853255176376%29_%28cropped2%29.jpg/440px-TheKillerBFILFF051023_%288_of_22%29_%2853255176376%29_%28cropped2%29.jpg">
            <p class="castname">Frank Darabon</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Tim_Robbins_%28Berlin_Film_Festival_2013%29.jpg/440px-Tim_Robbins_%28Berlin_Film_Festival_2013%29.jpg">
            <p class="castname">Tim Robbins</p>
            <p class="role">Ellis Boyd</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Morgan_Freeman_at_The_Pentagon_on_2_August_2023_-_230802-D-PM193-3363_%28cropped%29.jpg/440px-Morgan_Freeman_at_The_Pentagon_on_2_August_2023_-_230802-D-PM193-3363_%28cropped%29.jpg">
            <p class="castname">Morgan Freeman</p>
            <p class="role">Detective</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Clancy_Brown_by_Gage_Skidmore.jpg/440px-Clancy_Brown_by_Gage_Skidmore.jpg">
            <p class="castname"> Clancy Brown</p>
            <p class="role">John Doe</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Bob_Gunton%2C_1963_senior_photo.jpg/440px-Bob_Gunton%2C_1963_senior_photo.jpg">
            <p class="castname">Bob Gunton</p>
            <p class="role">Warden Norton</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">The Shawshank Redemption</h2>
      <p class="infoshow">1994   |   Crime/Thriller    |    2h 22m</p>
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