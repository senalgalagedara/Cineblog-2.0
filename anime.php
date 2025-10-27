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
    <title>ANIME - CINEBLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In cineblog/anime you can add or read reviews about anime">


    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/style.css' async>
    <link rel="icon" type="image/x-icon" href="assert/img/favicon.ico" async>
    <script src='assert/js/allwork.js' async></script>
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" async>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin async>
    <link async href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link async href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link async href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link async href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">


</head>
<body>
  <?php include __DIR__ . '/includes/navbar.php'; ?>

      <header class="adoo">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="assert/img/coverpics/onepiece.jpg" class="headimage">
              <div class="text">
                <span class="headline">One Piece</span>
                <p class="podidetails">1999 | Adventure | 20 Seasons</p>
                <p class="details">Monkey D. Luffy wants to become the King of all pirates. Along his quest he meets: a skilled swordsman named Roronoa Zolo.</p>
                <p class="cast">Eiichiro Oda | Toei Animation</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/attackontitan.webp" class="headimage">
              <div class="text">
                <span class="headline">Attack on Titan</span>
                <p class="podidetails">2013   |   Action/Fiction   |    4 Seasons</p>
                <p class="details" >Humankind constructs lofty walls to safeguard itself from immense creatures, the Titans. It battles to regain its land captured by the Titans which is not easy.</p>
                <p class="cast">Hajime Isayama | WIT Studio | MAPPA</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/naruto.jpg" class="headimage">
              <div class="text">
                <span class="headline">Naruto</span>
                <p class="podidetails">2002   |   Adventure/Martial Arts   |   30 Seasons </p>
                <p class="details"> It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</p>
                <p class="cast">Masashi Kishimoto | Pierrot</p>
              </div>
            </div>

            <div class="mySlides fade">
                <img src="assert/img/coverpics/yourname.jpg" class="headimage">
                <div class="text">
                  <span class="headline">Your Name</span>
                  <p class="podidetails">2016   |   Fantasy/Romance   |    1h 47m</p>
                  <p class="details">Two teenagers share a profound, magical connection upon discovering they are swapping bodies. Things manage to become even more complicated when the boy and girl decide to meet in person.</p>
                  <p class="cast">Makoto Shinkai | CoMix Wave Films</p>
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
            <h1 class="headtitlecover" id="animemovies">ANIME MOVIES</h1>
          </div>
          <div class="boxes" id="containerr1">

            <button id="slide1" class="buttonslideright" type="button">></button>
            <button id="slide2" class="buttonslideleft" type="button"><</button>
          
            <a href="revs/anime_rev/yourname.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/yourname.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Your Name</p>
                  <p class="podidetails2">2016 | Fantasy/Romance | 1h 47m</p>
                  <p class="googleinfo2">Two teenagers share a profound, magical connection upon discovering they are swapping bodies. Things manage to become even more complicated when the boy and girl decide to meet in person.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Your Name</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/ponyo.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/ponyo.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Ponyo</p>
                  <p class="podidetails2">2008 | Adventure/Fantasy | 1h 43m</p>
                  <p class="googleinfo2">A five-year-old boy develops a relationship with Ponyo, a young goldfish princess who longs to become a human after falling in love with him.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Ponyo</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/iwanttoeatyourpancreas.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/iwanttoeatyourpanreas.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">I Want to Eat Your Pancreas</p>
                  <p class="podidetails2">2018 | Romance/Drama | 1h 48m</p>
                  <p class="googleinfo2">A high school student discovers one of his classmates, Sakura Yamauchi, is suffering from a terminal illness. This secret brings the two together, as she lives out her final moments.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">I Want to Eat Your Pancreas</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">8.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/asilentvoice.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/asilentvoice.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">A Silent Voice</p>
                  <p class="podidetails2">2023 | Comaedy/Fantasy | 1h 54m</p>
                  <p class="googleinfo2">A grade-school student with a hearing impairment is bullied and transfers to another school. Years later, the former bully is tormented by his behaviour and sets out to make amends.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">A Silent Voice</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/thegardenofwords.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/gardenofwords.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Garden of Words</p>
                  <p class="podidetails2">2013 | Romance/Drama | 46m</p>
                  <p class="googleinfo2">A 15-year-old boy and 27-year-old woman find an unlikely friendship one rainy day in the Shinjuku Gyoen National Garden.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Garden of Words</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/howlsmovingcastle.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/howlsmovingcastle.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Howl's Moving Castle</p>
                  <p class="podidetails2">2004 | Adventure/Fantasy | 1h 59m</p>
                  <p class="googleinfo2">When an unconfident young woman is cursed with an old body by a spiteful witch, her only chance of breaking the spell lies with a self-indulgent yet insecure young wizard and his companions in his legged, walking castle.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Howl's Moving Castle</p>
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
            <h1 class="headtitlecover" id="animeseries">POPULAR ANIME SERIES</h1>
          </div>
          <div class="boxes" id="containerr2">

            <button id="slide3" class="buttonslideright" type="button">></button>
            <button id="slide4" class="buttonslideleft" type="button"><</button>
          

            <a href="revs/anime_rev/onepiece.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/one_piece.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">One Piece</p>
                  <p class="podidetails2">1999 | Adventure | 20 Seasons</p>
                  <p class="googleinfo2">Monkey D. Luffy wants to become the King of all pirates. Along his quest he meets: a skilled swordsman named Roronoa Zolo.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">One Piece</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/attackontitan.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/attck_on_titan.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Attack on Titan</p>
                  <p class="podidetails2">2013 | Action/Fiction | 4 Seasons </p>
                  <p class="googleinfo2">Humankind constructs lofty walls to safeguard itself from immense creatures, the Titans. It battles to regain its land captured by the Titans which is not easy.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Attack on Titan</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/naruto.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/naruto.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Naruto</p>
                  <p class="podidetails2">2002 | Adventure/Martial Arts  | 30 Seasons</p>
                  <p class="googleinfo2"> It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Naruto</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/jujutsukisen.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/jujutsu-kaisen.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Jujutsu Kaisen</p>
                  <p class="podidetails2">2020 | Action | 2 Seasons</p>
                  <p class="googleinfo2">A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself. He enters a shaman's school to be able to locate the demon's other body parts and thus exorcise himself.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Jujutsu Kaisen</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/deathnote.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/death_note.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Death Note</p>
                  <p class="podidetails2">2006 | Thriller | 1 Season</p>
                  <p class="googleinfo2">A high-school student discovers a supernatural notebook that grants its user the ability to kill.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Death Note</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/anime_rev/chainsawman.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/chainsawman.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Chainsaw Man</p>
                  <p class="podidetails2">2022 | Horror | 2 Season</p>
                  <p class="googleinfo2">Following a betrayal, a young man left for the dead is reborn as a powerful devil-human hybrid after merging with his pet devil and is soon enlisted into an organization dedicated to hunting devils.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Chainsaw Man</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>
          </div>
        </div>

        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->

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