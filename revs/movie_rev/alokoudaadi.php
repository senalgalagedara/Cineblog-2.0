<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'alokoudaadi';
$movie_title = 'Alokoudaadi';
$movie_type = 'movie';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aloko Udapadi - CINEBLOG</title>
    <meta name="description" content="Alokoudaadi: A gripping drama exploring complex human emotions and relationships within a tightly-knit family.">

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
            <img src="../../assert/img/coverpics2/alokoudapadi.jpg" class="headimagem">
            <div class="text">
              <span class="headline">Aloko Udapadi</span>
              <p class="podidetails">2017   |   Drama/History    |    1h 53m</p>
              <p class="details">Aloko Udapadi is a 2017 Sinhala epic historical film based on the story of King Valagamba of Anuradhapura. It was co-directed by Chathra Weeraman and Baratha Hettiarachchi</p>
              <p class="cast">Uddika Premarathna | Darshan Dharmaraj | Roshan Ravindra</p>
              <?php renderHeaderButtons($movie_id, $movie_title, $movie_type); ?>
            </div>
            <br>
          </div>
          
      </div> 
    </header> 

    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">Aloko Udapadi</h2>
      <p class="infoshow">2017   |   Drama/History    |    1h 53m</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">--</p>
      </div>
      <div class="space"></div>
      
    </div>

    <div class="box1">
      <div class="aboutmovie">
        <h2 class="infotitle">Movie Information</h2>
        <h3 class="listdetails boldd align">Plot Summary</h2>

        <p class="googleinfo">Aloko Udapadi is a 2017 Sinhala epic historical film based on the story of King Valagamba of Anuradhapura. It was co-directed by Chathra Weeraman and Baratha Hettiarachchi</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release Date:</b>January 20, 2017</li>
          <li class="listdetails"><b class="boldd">Genre:</b>History & Drama</li>
          <li class="listdetails"><b class="boldd">Director:</b>Chathra Weeraman & Baratha Gihan Hettiarachchi</li>
          <li class="listdetails"><b class="boldd">Producer:</b>Thusitha Wijayasena</li>
          <li class="listdetails"><b class="boldd">Box Office:</b>N/A</li>
          <li class="listdetails"><b class="boldd">Duration:</b>1h 53m</li>
          <li class="listdetails"><b class="boldd">Distributer:</b>EAP Cinema Circuit</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://media.licdn.com/dms/image/D5603AQEOqC0RrstkKg/profile-displayphoto-shrink_200_200/0/1693035248732?e=2147483647&v=beta&t=IbOEy074luIOCU15ue8cdkfCFQEwp3qJDS1wAOh9g7I">
            <p class="castname">Baratha Gihan Hettiarachchi</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://media.licdn.com/dms/image/D5603AQHtSepehWJEJg/profile-displayphoto-shrink_200_200/0/1665286999241?e=2147483647&v=beta&t=q6Z7he68JIiUws7HO1htZv7eIfkiv4_jduXj43nLhGg">
            <p class="castname">Chathra Weeraman</p>
            <p class="role">Director</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Uddika_Premarathna_2024.jpg/440px-Uddika_Premarathna_2024.jpg">
            <p class="castname">Uddika Premarathna</p>
            <p class="role">King Walagamba</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://adaderanaenglish.s3.amazonaws.com/1664683131-dharshan-dharmaraj.jpg">
            <p class="castname">Darshan Dharmaraj</p>
            <p class="role">Dathika</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://lk-aps.bmscdn.com/Artist/399.jpg">
            <p class="castname">Roshan Ravindra</p>
            <p class="role">Theera Brahmin</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6dlwnhs_euUm2v3vTurnVkF0G_n0vL-R-7didLE1Nzw&s">
            <p class="castname">Menaka Peiris</p>
            <p class="role">Chola wife</p>
          </div>
        </div>
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