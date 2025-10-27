<?php require_once __DIR__ . '/includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!--<div class="box"> 
    <img src="assert/img/lilcover/avengers_endgame.jpg" class="boximgcover">
    <div class="intro">
      <h3 class="movienamecover">Avangers EndGame</h3>
      <p class="showdetails">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again </p>
      <button class="readmorebtnshow">Read More</button>
    </div>
</div>-->

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>T-SERIES - CINEBLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In cineblog/tv series you can add or read reviews about tv- series/ animeted series or Sitcom">


    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/style.css'>
    <link rel="icon" type="image/x-icon" href="assert/img/favicon.ico">
    <script src='assert/js/allwork.js'></script>
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">


</head>
<body>
  <?php include __DIR__ . '/includes/navbar.php'; ?>

      <header class="adoo">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="assert/img/coverpics/bettercallsaul.jpg" class="headimage">
              <div class="text">
                <span class="headline">Better Call Saul</span>
                <p class="podidetails">2015   |   Drama    |    6 Seasons</p>
                <p class="details">The trials and tribulations of criminal lawyer Jimmy McGill in the time before he established his strip-mall law office in Albuquerque, New Mexico.</p>
                <p class="cast">Vince Gilligan | Bob Odenkirk | Rhea Seehorn</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/breakingbad.jpg" class="headimage">
              <div class="text">
                <span class="headline">Breaking Bad</span>
                <p class="podidetails">2008   |   Drama   |    5 Seasons</p>
                <p class="details" >A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future.</p>
                <p class="cast">Vince Gilligan | Bryan Cranston | Aaron Paul</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/loki.jpg" class="headimage">
              <div class="text">
                <span class="headline">Loki</span>
                <p class="podidetails">2021   |   Action   |    2 Seasons</p>
                <p class="details">After stealing the Tesseract, Loki comes into contact with a mysterious organization that gives him an ominous ultimatum, either fix the timeline or cease to exist completely.</p>
                <p class="cast">Tom Hiddleston | Sophia Martino | Owen Wilson</p>
              </div>
            </div>

            <div class="mySlides fade">
                <img src="assert/img/coverpics/gameoftrowns.jpg" class="headimage">
                <div class="text">
                  <span class="headline">Game of Thrones</span>
                  <p class="podidetails">2011   |   Drama   |    8 Seasons</p>
                  <p class="details">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. </p>
                  <p class="cast">Emma Clarke | Kit Harington | Pedro Pascal</p>
                </div>
              </div>

              <div class="mySlides fade">
                <img src="assert/img/coverpics/peacemaker.jpg" class="headimage">
                <div class="text">
                  <span class="headline">Peacemaker</span>
                  <p class="podidetails">2022   |   Action   |    1 Season</p>
                  <p class="details">After recovering from his injures, Christopher Smith is forced to join a black ops squad and eliminate parasites that have taken over human bodies around the world.</p>
                  <p class="cast">John Cena | Freddie Stroma | Alison Arya</p>
                </div>
              </div>



            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
            </div>
      </header>
      <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

      <script>
      let mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
      
        <div id="cookiePopup" class="hide">
          <p class="cookieHeading">We use cookies.</p>
          <p style="color: white;">
            We use cookies to ensure that we give you the best experience on our website.<a href="htmlfiles/privacy policy.html">Cookie Policy & Privacy.</a>
          </p>
          <button id="acceptCookie" class="acceptButton">Allow</button>
        </div>
        <!-- Script -->
        <script src="js/cookies.js"></script>
   
      <div class="ado">


        <div class="titlebox">
          <div class="title2">
            <h1 class="headtitlecover" id="topratedseries">Top Rated Series</h1>
          </div>
          <div class="boxes" id="containerr1">

            <button id="slide1" class="buttonslideright" type="button">></button>
            <button id="slide2" class="buttonslideleft" type="button"><</button>
          

            <a href="revs/series_rev/bettercallsaul.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/bettercallsaul.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Better Call Saul</p>
                  <p class="podidetails2">2015 | Drama | 6 Seasons</p>
                  <p class="googleinfo2">The trials and tribulations of criminal lawyer Jimmy McGill in the time before he established his strip-mall law office in Albuquerque, New Mexico.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Better Call Saul</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/breakingbad.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/breaking_bad.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Breaking Bad</p>
                  <p class="podidetails2">2008 | Drama | 5 Seasons</p>
                  <p class="googleinfo2">A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Breaking Bad</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/gameofthrones.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/game_of_thrones.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Game of Thrones</p>
                  <p class="podidetails2">2011 | Drama | 8 Seasons</p>
                  <p class="googleinfo2">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. </p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Game of Thrones</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/moneyheist.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/la_casa_de_papel.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Money Heist</p>
                  <p class="podidetails2">2017 | Thriller | 5 Seasons</p>
                  <p class="googleinfo2">A group of unique robbers assault the Factory of Moneda and Timbre to carry out the most perfect robbery in the history of Spain and take home 2.4 billion euros.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Money Heist</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">7.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/prisonbreak.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/prisonbreak.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Prison Break</p>
                  <p class="podidetails2">2005 | Drama | 5 Seasons</p>
                  <p class="googleinfo2">Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother, who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them out.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Prison Break</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">7.0</p>
              </div>
            </div></a>

          </div>
        </div>

        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
        <div class="space"></div>

        <div class="titlebox">
          <div class="title2">
            <h1 class="headtitlecover" id="animetedseries">Animated T-Series  & Sitcom</h1>
          </div>
          <div class="boxes" id="containerr2">

            <button id="slide3" class="buttonslideright" type="button">></button>
            <button id="slide4" class="buttonslideleft" type="button"><</button>
          

            <a href="revs/series_rev/invincible.php"><div class="boxpage" style="cursor:not-allowed !important;">
              <div class="container2" style="cursor:not-allowed !important;">
                <img src="assert/img/poster/invincible.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Invincible</p>
                  <p class="podidetails2">2021 | Action | 2 Seasons</p>
                  <p class="googleinfo2">An adult animated series based on the Skybound/Image comic about a teenager whose father is the most powerful superhero on the planet.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Invincible</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/familyguy.php"><div class="boxpage" style="cursor:not-allowed !important;"> 
              <div class="container2" style="cursor:not-allowed !important;">
                <img src="assert/img/poster/familyguy.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Family Guy</p>
                  <p class="podidetails2">1999 | Sitcom | 22 Seasons</p>
                  <p class="googleinfo2">In a wacky Rhode Island town, a dysfunctional family strive to cope with everyday life as they are thrown from one crazy scenario to another.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Family Guy</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/friends.php"><div class="boxpage" style="cursor:not-allowed !important;">
              <div class="container2" style="cursor:not-allowed !important;">
                <img src="assert/img/poster/friends.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Friends</p>
                  <p class="podidetails2">1994 | Sitcom | 10 Seasons</p>
                  <p class="googleinfo2">Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Friends</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/community.php"><div class="boxpage" style="cursor:not-allowed !important;">
              <div class="container2" style="cursor:not-allowed !important;">
                <img src="assert/img/poster/community.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Community</p>
                  <p class="podidetails2">2009 | Sitcom | 6 Seasons</p>
                  <p class="googleinfo2">A suspended lawyer is forced to enroll in a community college with an eclectic staff and student body.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Community</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/rickandmorty.php"><div class="boxpage" style="cursor:not-allowed !important;">
              <div class="container2" style="cursor:not-allowed !important;">
                <img src="assert/img/poster/rickandmorty.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Rick and Morty</p>
                  <p class="podidetails2">2013 | Sitcom | 7 Seasons</p>
                  <p class="googleinfo2">An animated series that follows the exploits of a super scientist and his not-so-bright grandson.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Rick and Morty</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            
          </div>
        </div>

        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
        <div class="space"></div>

        <div class="titlebox">
          <div class="title2">
            <h1 class="headtitlecover" id="mcundcu">MCU & DCU</h1>
          </div>
          <div class="boxes" id="containerr3">

            <button id="slide5" class="buttonslideright" type="button">></button>
            <button id="slide6" class="buttonslideleft" type="button"><</button>
          

            <a href="revs/series_rev/loki.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/loki.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Loki</p>
                  <p class="podidetails2">2023 | Comaedy/Fantasy | 1h 54m</p>
                  <p class="googleinfo2">After stealing the Tesseract, Loki comes into contact with a mysterious organization that gives him an ominous ultimatum, either fix the timeline or cease to exist completely.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Loki</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/peacemaker.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/peacemaker.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Peacemaker</p>
                  <p class="podidetails2">2022 | Action | 1 Season</p>
                  <p class="googleinfo2">After recovering from his injures, Christopher Smith is forced to join a black ops squad and eliminate parasites that have taken over human bodies around the world.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Peacemaker</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.1</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/daredevil.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/daredevil.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Daredevil</p>
                  <p class="podidetails2">2015| Action | 3 Seasons</p>
                  <p class="googleinfo2">A man blinded by toxic waste which also enhanced his remaining senses fights crime as an acrobatic martial arts superhero.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Daredevil</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/theflash.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/theflash.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Flash</p>
                  <p class="podidetails2">2014 | Sci-fi | 9 Seasons</p>
                  <p class="googleinfo2">After being struck by lightning, Barry Allen wakes up from his coma to discover he's been given the power of super speed, becoming the Flash, fighting crime in Central City.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Flash</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/series_rev/whatif.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/whatif.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">What If...?</p>
                  <p class="podidetails2">2021 | Action | 2 Seasons</p>
                  <p class="googleinfo2">Exploring pivotal moments from the Marvel Cinematic Universe and turning them on their head, leading the audience into uncharted territory.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">What If...?</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            
          </div>
        </div>

        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
        
        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
      
        <svg class="test6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#000000" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,181.3C320,192,400,256,480,240C560,224,640,128,720,128C800,128,880,224,960,250.7C1040,277,1120,235,1200,229.3C1280,224,1360,256,1400,272L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
        </svg>

        <?php include __DIR__ . '/includes/footer.php'; ?>
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
        <script src="js/scrollleftright.js"></script>
</body>
</html>