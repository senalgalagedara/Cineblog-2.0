<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CINEBLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cineblog.lankanblog is a  website about movie reviews, tv show/series reviews and anime reviews">

    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css' async>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/mob_style.css' async>

    <link rel="icon" type="image/x-icon" href="../img/favicon.ico" async>
    
    <script src="https://kit.fontawesome.com/4e00cb04a3.js"  async crossorigin="anonymous"></script>
    <link rel="preconnect" async href="https://fonts.googleapis.com">
    <link rel="preconnect" async href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet" async>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" async>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet" async>

    <script>
    </script>
</head>
<body>

<nav class="mynav">
      <div class="spaceforlogo">
      <a href="index.html" class="homelinkd">CINEBLOG</a>
      </div>
      <div class="linkorder">
        <a href="movies.html" class="nostyle">MOVIES</a>
        <a href="tseries.html" class="nostyle">T SERIES</a>
        <a href="anime.html" class="nostyle">ANIME</a>
      </div>
      <div class="spaceforsearch">
        <i class="fa-solid fa-magnifying-glass" onclick="toggleSearch()"></i>
        <input class="searchbarr"type="text" id="input-box" placeholder="Type to search...">
        <div class="result-box hmm"></div>
        <script src='js/allwork.js'></script>
      </div>
      <div class="loginsignup">

      </div>
</nav>
    <div class="rank">
        <h2 >Badges</h2>
        <div class="badges">
            <img src="badges/sample.png" alt="badge1" class="b_img">
            <img src="badges/sample.png" alt="badge1" class="b_img">
            <img src="badges/sample.png" alt="badge1" class="b_img">
            <img src="badges/sample.png" alt="badge1" class="b_img">
            <img src="badges/sample.png" alt="badge1" class="b_img">

        </div>
    </div>

    <div class="prof">
        <div class="profile-card">
            <div class="profile-header">
                <h2>Senal Galagedara <span class="flag">🇱🇰</span></h2>
                <span style="width: 20%;"><img id="profile-img" src="img/user.jpg" alt="Profile Picture" class="profile-img"></span>
            </div>
        <p id="bio">This is my bio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consequuntur eaque blanditiis nulla adipisci modi aperiam. Iusto, itaque blanditiis quasi, dolorem a, cumque doloremque officia consequuntur at quibusdam ipsa inventore.</p>
        <button class="edit-btn" onclick="openModal()">✏️</button>

    </div>

    <!-- Modal for Editing -->
    <div id="edit-modal" class="personalmodal">
        <div class="personalmodal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Edit Profile</h2>
            <label>Update Profile Picture:</label>
            <input type="file" id="upload-img" accept="image/*" onchange="previewImage(event)">
            <label>Edit Bio:</label>
            <textarea id="edit-bio" rows="3"></textarea>
            <button onclick="saveChanges()">Save</button>
        </div>
    </div>
    </div>
</div>
<div class="castbox1">

          <div class="castdit">
            <p class="role1">Fav. Director</p>
            <p class="castname">Peyton Reed</p>
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Peyton_Reed_%28cropped%29.jpg/440px-Peyton_Reed_%28cropped%29.jpg">
          </div>
          <div class="castdit">
             <p class="role1">Fav. Actor</p>
            <p class="castname">Paul Rudd</p>
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Paul_Rudd_%28cropped%29_2.jpg/440px-Paul_Rudd_%28cropped%29_2.jpg">

          </div>
          <div class="castdit">
              <p class="role1">Fav. Actress</p>
            <p class="castname">Michael Pena</p>
            <img class="castimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Michael_Pe%C3%B1a_TIFF_2015.jpg/440px-Michael_Pe%C3%B1a_TIFF_2015.jpg">
          </div>

        </div>
      </div>
      <div class="titlebox">
            <div class="title2_user">
            <h1 class="headtitle_user">Watched Movies</h1>
          </div>

            <div class="boxes_user" id="containerr4">
            
              <div class="boxuser">
                <img src="../img/poster/naruto.webp" alt="naruto" class="boximguser">
                <p class="moviename_user">Naruto</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/attck_on_titan.webp" alt="attackontitan" class="boximguser">
                <p class="moviename_user">Shingeki no kyojin</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/one_piece.jpg" alt="one_piece" class="boximguser">
                <p class="moviename_user">One Piece</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/death_note.webp" alt="one piece" class="boximguser">
                <p class="moviename_user">Death Note</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/yourname.jpg" alt="your name" class="boximguser">
                <p class="moviename_user">Kimi no na wa - Your Name</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/spyfamily.webp" alt="spyxfamily" class="boximguser">
                <p class="moviename_user">Spy × Family</p>
              </div>
              <div class="boxuser">
                <img src="../img/poster/naruto.webp" alt="naruto" class="boximguser">
                <p class="moviename_user">Naruto</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/attck_on_titan.webp" alt="attackontitan" class="boximguser">
                <p class="moviename_user">Shingeki no kyojin</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/one_piece.jpg" alt="one_piece" class="boximguser">
                <p class="moviename_user">One Piece</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/death_note.webp" alt="one piece" class="boximguser">
                <p class="moviename_user">Death Note</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/yourname.jpg" alt="your name" class="boximguser">
                <p class="moviename_user">Kimi no na wa</p>
              </div>

              <div class="boxuser">
                <img src="../img/poster/spyfamily.webp" alt="spyxfamily" class="boximguser">
                <p class="moviename_user">Spy × Family</p>
              </div>
          </div>
        </div>

        <div class="space"></div>
    <script>
        function openModal() {
            document.getElementById("edit-modal").style.display = "flex";
        }
        function closeModal() {
            document.getElementById("edit-modal").style.display = "none";
        }
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                document.getElementById("profile-img").src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        function saveChanges() {
            const bioText = document.getElementById("edit-bio").value;
            if (bioText) {
                document.getElementById("bio").innerText = bioText;
            }
            closeModal();
        }
    </script>
    <footer class="end">
        <div class="footerboxelogo">
          <ul class="footerul">
            <li class="footerlicenter">CINEBLOG 
            </li>
          </ul>
        </div>

        <div class="footerboxes">
            <ul class="footerul"> 
             <li> <a class="footlink" href="movies.html"><h3>MOVIES</h3></a></li>
              <li><a class="footlink" href="movies.html#toprmovies">TOP RATED MOVIES</a></li>
              <li><a class="footlink" href="movies.html#newmovies">NEW & UPCOMING MOVIES</a></li>
              <li><a class="footlink" href="movies.html#sinhalamovies">SINHALA & INDIAN MOVIES</a></li>
              <li><a class="footlink" href="movies.html#classicmovies">CLASSIC MOVIES</a></li>
            </ul>
        </div>
        
        <div class="footerboxes">
            <ul class="footerul"> 
              <li><a class="footlink" href="tseries.html"><h3>T-SERIES</h3></a></li>
              <li><a class="footlink" href="tseries.html#topratedseries">TOP RATED SERIES</a></li>
              <li><a class="footlink" href="tseries.html#animetedseries">ANIMATED SERIES & SITCOM</a></li>
              <li><a class="footlink" href="tseries.html#mcundcu">MCU & DCU</a></li>
            </ul>
        </div>

        <div class="footerboxes">
            <ul class="footerul"> 
              <li><a class="footlink" href="anime.html"><h3>ANIME</h3></a></li>
                <li><a class="footlink" href="anime.html#animemovies">ANIME MOVIES</a></li>
                <li><a class="footlink" href="anime.html#animeseries">POPULAR SERIES</a></li>
                
            </ul>
        </div>
        
    </footer>
 <Span class="footertext">2024 cineblog.lk x hydracast (all rights reserved) <a href="https://www.lankanblog.lk/htmlfiles/privacy%20policy.html">Privacy Policy</a></Span>
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