<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'antman1';
$movie_title = 'Ant-Man';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ant-Man 1 - CINEBLOG</title>
    <meta name="description" content="Ant-Man: Marvel's superhero film featuring Scott Lang, who acquires a suit that allows him to shrink in size but grow in strength, embarking on a heist to save the world.">

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
            <img src="../../assert/img/coverpics/ant man1 (2).jpg" class="headimagem">
            <div class="text">
              <span class="headline">Ant-Man 1</span>
              <p class="podidetails">2015   |   Action/Comedy    |    1h 58m</p>
              <p class="details">Scott, a master thief, gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.</p>
              <p class="cast">Paul Rudd | Evangeline Lilly | Michael Pena</p>
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

        <p class="googleinfo">Scott, a master thief, gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b> July 17, 2015</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Action & Comedy</li>
          <li class="listdetails"><b class="boldd">Director:</b>Peyton Reed</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Kevin Feige</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>$519M</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 58m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>Walt Disney Pictures</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Peyton_Reed_%28cropped%29.jpg/440px-Peyton_Reed_%28cropped%29.jpg">
            <p class="castname">Peyton Reed</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Paul_Rudd_%28cropped%29_2.jpg/440px-Paul_Rudd_%28cropped%29_2.jpg">
            <p class="castname">Paul Rudd</p>
            <p class="role">Ant-Man</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Michael_Pe%C3%B1a_TIFF_2015.jpg/440px-Michael_Pe%C3%B1a_TIFF_2015.jpg">
            <p class="castname">Michael Pena</p>
            <p class="role">Luis</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Michael_Douglas_C%C3%A9sar_2016_3.jpg/440px-Michael_Douglas_C%C3%A9sar_2016_3.jpg">
            <p class="castname">Michael Douglas</p>
            <p class="role">Hank Pym</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Bobby_Cannavale_2009.jpg/440px-Bobby_Cannavale_2009.jpg">
            <p class="castname">Bobby Cannavale</p>
            <p class="role">Paxton</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Evangeline_Lilly_2014_Comic_Con_01_%28cropped%29.jpg/440px-Evangeline_Lilly_2014_Comic_Con_01_%28cropped%29.jpg">
            <p class="castname">Evangeline Lilly</p>
            <p class="role">Hope Pyn</p>
          </div>
        </div>
      </div>
    
    </div>
    <div class="space"></div>
    <?php renderWatchlistButtons($movie_id, $movie_title, $movie_type); ?>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">ANT-MAN</h2>
      <p class="infoshow">2015   |   Action/Comedy    |    1h 58m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">7.5</p>
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