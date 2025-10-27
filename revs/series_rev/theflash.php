<?php 
require_once __DIR__ . '/../../includes/session.php'; 
require_once __DIR__ . '/../../includes/movie_helper.php';

// Define movie details
$movie_id = 'theflash';
$movie_title = 'The Flash';
$movie_type = 'series';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>The Flash - CINEBLOG</title>
    <link rel="icon" type="image/x-icon" href="../../assert/img/favicon.ico" async>
    <meta name='viewport' content='width=device-width, initial-scale=1' async>
    <link rel='stylesheet' type='text/css' media='screen' href="../../assert/css/style.css" async>
    <meta name="description" content="The Flash: Join Barry Allen, the fastest man alive, as he uses his super speed to fight crime and protect Central City. Experience the exhilarating adventures and challenges of this beloved superhero." />
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
            <img src="../../assert/img/coverpics3/theflash.jpg" class="headimagem">
            <div class="text">
              <span class="headline">The Flash</span>
              <p class="podidetails">2014 - 2023   |   Sci-fi    |    9 Seasons</p>
              <p class="details">Barry Allen, a forensic investigator in Central City, gains the power of superhuman speed from a freak accident. He decides to use it to fight crime as the Flash, a costumed superhero.</p>
              <p class="cast">Grant Gustin | Candice Patton | Danielle Panabaker</p>
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

        <p class="googleinfo">Barry Allen, a forensic investigator in Central City, gains the power of superhuman speed from a freak accident. He decides to use it to fight crime as the Flash, a costumed superhero.</p>
        <ul>
          <li class="listdetails"><b class="boldd">Release year:</b>2014</li>
          <li class="listdetails"><b class="boldd">Final episode date:</b>May 24, 2023</li>
          <li class="listdetails"><b class="boldd">Genre:</b>Sci-fi</li>
          <li class="listdetails"><b class="boldd">Writer:</b>Greg Berlanti</li>
          <li class="listdetails"><b class="boldd">Running time:</b>41 - 45m</li>
          <li class="listdetails"><b class="boldd">Network:</b>The CW</li>
        </ul>
        <div class="castbox">

          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Greg_Berlanti_cropped.jpg/440px-Greg_Berlanti_cropped.jpg">
            <p class="castname">Greg Berlanti</p>
            <p class="role">Writer</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Grant_Gustin_2023.jpg/440px-Grant_Gustin_2023.jpg">
            <p class="castname">Grant Gustin</p>
            <p class="role">Barry Alan</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Danielle_Panabaker_at_H%26V_Fan_Fest_2016.jpg/440px-Danielle_Panabaker_at_H%26V_Fan_Fest_2016.jpg">
            <p class="castname">Danielle Panabaker</p>
            <p class="role">Killer Frost</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Candice_Patton_2017_Paley_Fest.jpg/440px-Candice_Patton_2017_Paley_Fest.jpg">
            <p class="castname">Candice Patton</p>
            <p class="role">Iris West</p>
          </div>
          <div class="castdit">
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Carlos_Valdes_Wondercon_cropped.png">
            <p class="castname">Carlos Valdes</p>
            <p class="role">Vibe</p>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>

    <div class="movieratefinal">
      <h2 class="infotitlefinal">The Flash</h2>
      <p class="infoshow">2014 - 2023   |   Sci-fi    |    9 Seasons</p>
      <div class="box2">
        <div class="box3">
          <img src="../../assert/img/hydracastlogo.jpg" class="hyimg">
        </div>
        <p class="bigratetext">8.0</p>
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
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="breakingbad.php">Breaking Bad</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="bettercallsaul.php">Better Call Saul</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.0</td>
            <td><a class="footlink" href="gameofthrones.php">Game of Thrones</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
           <td> <a class="footlink" href="moneyheist.php">Money Heist</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">7.0</td>
            <td><a class="footlink" href="prisonbreak.php">Prison Break</a></td>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.5</td>
            <td><a class="footlink" href="loki.php">Loki</td></a>
          </tr>
          <tr>
            <td><img src="../../assert/img/hydracastlogo.jpg" class="ratinglogo">9.1</td>
            <td><a class="footlink" href="peacemaker.php">Peacemaker</td></a>
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