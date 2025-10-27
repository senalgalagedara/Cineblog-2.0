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
      <title>MOVIES - CINEBLOG</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="In cineblog/movie you can add or read reviews about movies">
  
      <link rel='stylesheet' type='text/css' media='screen' href='assert/css/style.css' async>
      <link rel="icon" type="image/x-icon" href="assert/img/favicon.ico" async>
      <script src='assert/js/allwork.js'></script>
  
      <link rel="preconnect" href="https://fonts.googleapis.com" async>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin async>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" async>
      <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet" async>
      <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" async>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet" async>
      <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous" async></script>
  
  </head>
<body>
  <?php include __DIR__ . '/includes/navbar.php'; ?>
      <header class="adoo">
        <div class="slideshow-container">

          <div class="mySlides fade">
            <img src="assert/img/coverpics/jhon wick1.webp" class="headimage">
            <div class="text">
              <span class="headline">John Wick: Chapter 4</span>
              <p class="podidetails">2023   |   Action/Thriller   |    2h 49m</p>
              <p class="details">With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.</p>
              <p class="cast">Keanu Reeves | Bill Skarsgård | Donnie Yen</p>
            </div>
          </div>
          
            <div class="mySlides fade">
              <img src="assert/img/coverpics/antman&wasp.jpg" class="headimage">
              <div class="text">
                <span class="headline">Ant-Man and the Wasp: Quantumania</span>
                <p class="podidetails">2023   |   Action/Adventure    |    2h 5m</p>
                <p class="details">Ant-Man and the Wasp find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that pushes them beyond the limits of what they thought was possible.</p>
                <p class="cast">Jonathan Majors | Paul Rudd | Evangeline Lilly</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/avengers1.jpg" class="headimage">
              <div class="text">
                <span class="headline">The Avengers</span>
                <p class="podidetails">2012   |   Action/Fantasy   |    2h 23m</p>
                <p class="details" >S.H.I.E.L.D. leader Nick Fury is compelled to launch the Avengers programme when Loki poses a threat to planet Earth. But the superheroes must learn to work together if they are to stop him in time.</p>
                <p class="cast">Robert Downey Jr. | Scarlett Johansson | Chris Evans</p>
              </div>
            </div>
            
            <div class="mySlides fade">
              <img src="assert/img/coverpics/eternals1.webp" class="headimage">
              <div class="text">
                <span class="headline">Eternals</span>
                <p class="podidetails">2021   |   Action/Fantasy   |    2h 37m</p>
                <p class="details">The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.</p>
                <p class="cast">Angelina Jolie | Barry Keoghan | Gemma Chan/p>
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
            <h1 class="headtitlecover" id="newmovies">NEW & UPCOMING MOVIES</h1>
          </div>
          <div class="boxes" id="containerr1">

            <button id="slide1" class="buttonslideright" type="button">></button>
            <button id="slide2" class="buttonslideleft" type="button"><</button>


            <a class="nospace" href="revs/movie_rev/deadpoolwolverine.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/deadpool_wolverine-p1616061.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Deadpool & Wolverine</p>
                  <p class="podidetails2">2024 | Action/Comedy </p>
                  <p class="googleinfo2">Wolverine is recovering from his injuries when he crosses paths with the loudmouth, Deadpool. They team up to defeat a common enemy.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Deadpool & Wolverine</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/thefallguy.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/the_fall_guy-p1615501.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Fall Guy</p>
                  <p class="podidetails2">2024 | Action/Comedy | 2h 5m</p>
                  <p class="googleinfo2">After leaving the business one year earlier, battle-scarred stuntman Colt Seavers springs back into action when the star of a big studio movie suddenly disappears.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Fall Guy</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            
            <a href="revs/movie_rev/dunepart2.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/dune2.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">DUNE: Part 2</p>
                  <p class="podidetails2">2024 | Sci-fi/Adventure | 2h 46m</p>
                  <p class="googleinfo2">Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.A choice between the love of his life and the fate of the universe, he must prevent...</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">DUNE: Part 2</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/kungfupanda4.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/kung_fu_panda_4-p1613094.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Kung Fu Panda 4</p>
                  <p class="podidetails2">2024 | Comedy/Adventure | 1h 34m</p>
                  <p class="googleinfo2">Kung Fu Panda 4 is a 2024 American animated martial arts comedy film produced by DreamWorks Animation and distributed by Universal Pictures.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Kung Fu Panda 4</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            

            <a class="nospace" href="revs/movie_rev/godzillaxkong.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/godzilla_x_kong_the_new_empire-p1614223.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Godzilla x Kong: The New Empire</p>
                  <p class="podidetails2">2024 | Action/Sci-fi | 1h 55m</p>
                  <p class="googleinfo2">Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Godzilla x Kong: The New Empire</p>
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
            <h1 class="headtitlecover" id="toprmovies">TOP RATED MOVIES</h1>
          </div>
          <div class="boxes" id="containerr2">

            <button id="slide3" class="buttonslideright" type="button">></button>
            <button id="slide4" class="buttonslideleft" type="button"><</button>

            <a href="revs/movie_rev/oppenhimer.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/oppenheimer-p1600888.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Oppenheimer</p>
                  <p class="podidetails2">2023 | Mystery/Thriller  | 3h</p>
                  <p class="googleinfo2">During World War II, Lt. Gen. Leslie Groves Jr. appoints physicist J. Robert Oppenheimer to work on the top-secret Manhattan Project. Oppenheimer and a team of scientists spend years developing and designing the atomic bomb.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Oppenheimer</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/barbie.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/barbie-p1602325.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Barbie</p>
                  <p class="podidetails2">2023 | Comedy/Fantasy | 1h 54m</p>
                  <p class="googleinfo2">Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Barbie</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/fightclub.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/fight_club-p1610838.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Fight Club</p>
                  <p class="podidetails2">1999 | Crime/Thriller | 2h 19m</p>
                  <p class="googleinfo2">Unhappy with his capitalistic lifestyle, a white-collared insomniac forms an underground fight club with Tyler, a careless soap salesman. Soon, their venture spirals down into something sinister.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Fight Club</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/thewolfofwallstreet.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/thewolfofwallstreet.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Wolf of Wall Street</p>
                  <p class="podidetails2">2013 | Crime/Comedy | 3h</p>
                  <p class="googleinfo2">Introduced to life in the fast lane through stockbroking, Jordan Belfort takes a hit after a Wall Street crash. He teams up with Donnie Azoff, cheating his way to the top as his relationships slide.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Wolf of Wall Street</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/bullettrain.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/bullet_train.webp" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Bullet Train</p>
                  <p class="podidetails2">2022 | Action/Comed | 2h 6m</p>
                  <p class="googleinfo2">Ladybug, a professional assassin, is assigned to retrieve a briefcase from a bullet train. Soon, he finds himself battling many other killers who board the same train but with a different objective.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Bullet Train</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/dunepart2.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/dune2.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Dune: Part 2</p>
                  <p class="podidetails2">2024 | Sci-fi/Adventure | 2h 46m</p>
                  <p class="googleinfo2">aul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.A choice between the love of his life and the fate of the universe, he must prevent...</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Dune: Part 2</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>
          </div>
        </div>


        

        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
        <div class="space"></div>

        <div class="titlebox">
          <div class="title2">
            <h1 class="headtitlecover" id="sinhalamovies">SINHALA, HINDI & TAMIL MOVIES</h1>
          </div>
          <div class="boxes" id="containerr3">

            <button id="slide5" class="buttonslideright" type="button">></button>
            <button id="slide6" class="buttonslideleft" type="button"><</button>


            <a href="revs/movie_rev/giniavisahaginikeli.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/gini_avi_saha_gini_keli-p1199871.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Gini Avi Saha Gini Keli</p>
                  <p class="podidetails2">1998 | Drama/Action | 1h 30m</p>
                  <p class="googleinfo2">The plot revolves around the ascension and downfall of Padmasiri, a gang leader in Sri Lanka.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Gini Avi Saha Gini Keli</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/alokoudaadi.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/aloko_udapadi-p1038839.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Aloko Udapadi</p>
                  <p class="podidetails2">2017 | Drama/History | 1h 53m</p>
                  <p class="googleinfo2">Aloko Udapadi is a 2017 Sinhala epic historical film based on the story of King Valagamba of Anuradhapura.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Aloko Udapadi</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/ginnenupanseethala.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/ginnenupanseethala.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Ginnen Upan Seethala</p>
                  <p class="podidetails2">2018 | Thriller/Drama | 2h 30m</p>
                  <p class="googleinfo2">Ginnen Upan Seethala is a 2019 Sinhala biographical film about Sri Lankan Marxist revolutionary Rohana Wijeweera.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Ginnen Upan Seethala</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/3idiots.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/3_idiots-p533333.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">3 Idiots</p>
                  <p class="podidetails2">2009 | Comedy/Romance | 2h 50m</p>
                  <p class="googleinfo2">In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">3 Idiots</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.0</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/msdhoni.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/ms_dhoni_the_untold_story-p1020606.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">M.S. Dhoni: The Untold Story</p>
                  <p class="podidetails2">2016 | Sport/Thriller | 3h 10m</p>
                  <p class="googleinfo2">M S Dhoni, a boy from Ranchi, aspires to play cricket for India. Though he initially tries to please his father by working for the Indian Railways, he ultimately decides to chase his dreams.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">M.S. Dhoni: The Untold Story</p>
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
            <h1 class="headtitlecover" id="classicmovies">CLASSIC MOVIES</h1>
          </div>
          <div class="boxes" id="containerr4">

            <button id="slide7" class="buttonslideright" type="button">></button>
            <button id="slide8" class="buttonslideleft" type="button"><</button>
     

            <a href="revs/movie_rev/pulpfiction.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/pulp_fiction-p22044.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Pulp Fiction</p>
                  <p class="podidetails2">1994 | Crime/Thriller | 3h 34m</p>
                  <p class="googleinfo2">In the realm of underworld, a series of incidents intertwines the lives of two Los Angeles mobsters, a gangster's wife, a boxer and two small-time criminals.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Pulp Fiction</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/shawshankredemption.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/the_shawshank_redemption-p8494.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Shawshank Redemption</p>
                  <p class="podidetails2">1994 | Crime/Thriller | 2h 22m</p>
                  <p class="googleinfo2">Andy Dufresne, a successful banker, is arrested for the murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison. He becomes the most unconventional prisoner.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Shawshank Redemption</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/thegodfather1.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/the_godfather-p702652.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Godfather</p>
                  <p class="podidetails2">1972 | Crime | 2h 55m</p>
                  <p class="googleinfo2">Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son, Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Godfather</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/thegreenmile.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/the_green_mile-p34970.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">The Green Mile</p>
                  <p class="podidetails2">1999 | Crime/Fantasy | 3h 9m</p>
                  <p class="googleinfo2">Paul Edgecomb, the head guard of a prison, meets an inmate, John Coffey, a black man who is accused of murdering two girls. </p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">The Green Mile</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/seven.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/se7en-p115148.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Se7en</p>
                  <p class="podidetails2">1995 | Crime/Mystery | 2h 7m</p>
                  <p class="googleinfo2">Detectives Somerset and Mills, one a seasoned cop, the other a relatively new one, are paired up to solve murders. Together they attempt to find a killer who is inspired by the seven deadly sins.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Se7en</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">--</p>
              </div>
            </div></a>

            <a class="nospace" href="revs/movie_rev/fightclub.php"><div class="boxpage">
              <div class="container2">
                <img src="assert/img/poster/fight_club-p1610838.jpg" alt="Avatar" class="boximg">
                <div class="contentek">
                  <p class="text1">Fight Club</p>
                  <p class="podidetails2">1999 | Crime/Thriller | 2h 19m</p>
                  <p class="googleinfo2">Unhappy with his capitalistic lifestyle, a white-collared insomniac forms an underground fight club with Tyler, a careless soap salesman. Soon, their venture spirals down into something sinister.</p>
                  <button class="readmorebtn2">Read More</button>
                </div>
              </div>
              <p class="moviename2">Fight Club</p>
              <div class="rating">
                <img src="assert/img/hydracastlogo.jpg" class="ratinglogo">
                <p class="ratetext">9.5</p>
              </div>
            </div></a>

          </div>
        </div>
      </div>
        <!--asllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllls-->
      
        <svg class="test6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#000000" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,181.3C320,192,400,256,480,240C560,224,640,128,720,128C800,128,880,224,960,250.7C1040,277,1120,235,1200,229.3C1280,224,1360,256,1400,272L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
        </svg>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src='js/allwork.js'></script>
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