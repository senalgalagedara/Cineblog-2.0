<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CINEBLOG by LANKANBLOG.lk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">

    <script>
      //alert("guys ill upload reviews within month.create and upload review is big process.sorry!");
    </script>
</head>
<body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>  
<div id="id01" class="modal">
  
  <form class="modal-content animate"
  style="width:40%; display:block; margin:auto;" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" 
      style="size: 25px;" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <h1 class="idk">Login</h1>
      <p class="idk2">Login to your account</p>
      <hr>
      <label for="uname"><b>Username/Email</b></label>
      <input type="text" placeholder="Enter Username or email" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="signupbtn" style="border-radius: 10px ; background-color:green;">Login</button>
      <button type="button"
      style="background-color:red;"
       onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      
    </div>
  </form>
</div>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php"  style="width:40%; display:block; margin:auto;">
    <div class="container">
      <h1 class="idk">Register</h1>
      <p class="idk2">Get start with an account to rate and review movies, TV shows and anime.</p>
      <hr>
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter unsername" name="email" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p class="idk2">By joining cineblog you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" style="background-color:green;" class="signupbtn">Sign Up</button>
        <button type="button" style="background-color:red;"
         onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

    

      <svg class="test6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000000" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,181.3C320,192,400,256,480,240C560,224,640,128,720,128C800,128,880,224,960,250.7C1040,277,1120,235,1200,229.3C1280,224,1360,256,1400,272L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
      </svg>
      <footer class="end">
        
        <div class="footerboxelogo">
          <ul class="footerul">
            <li class="footerlicenter">CINEBLOG 
             <div><sub><a class="footlink" href="../index.html">by lankanblog.lk</a></sub></div>
            </li>
          </ul>
        </div>

        <div class="footerboxes">
            <ul class="footerul"> 
              <a class="footlink" href="movies.php"><li><h3>MOVIES</h3></li></a>
              <a class="footlink" href="movies.php#toprmovies"><li>TOP RATED MOVIES</li></a>
              <a class="footlink" href="movies.php#newmovies"><li>NEW & UPCOMING MOVIES</li></a>
              <a class="footlink" href="movies.php#sinhalamovies"><li>SINHALA & INDIAN MOVIES</li></a>
              <a class="footlink" href="movies.php#classicmovies"><li>CLASSIC MOVIES</li></a>
            </ul>
        </div>
        
        <div class="footerboxes">
            <ul class="footerul"> 
              <a class="footlink" href="tseries.php"><li><h3>T-SERIES</h3></li></a>
              <a class="footlink" href="tseries.php#topratedseries"><li>TOP RATED SERIES</li></a>
              <a class="footlink" href="tseries.php#animetedseries"><li>ANIMATED SERIES & SITCOM</li></a>
              <a class="footlink" href="tseries.php#mcundcu"><li>MCU & DCU</li></a>
            </ul>
        </div>

        <div class="footerboxes">
            <ul class="footerul"> 
              <a class="footlink" href="anime.php"><li><h3>ANIME</h3></li></a>
                <a class="footlink" href="anime.php#animemovies"><li>ANIME MOVIES</li></a>
                <a class="footlink" href="anime.php#animeseries"><li>POPULAR SERIES</li></a>
                
            </ul>
        </div>
        
    </footer>
    <Span class="footertext">2024 cineblog.lk x hydracast (all rights reserved)</Span>
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