<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>CINEBLOG</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cineblog.lankanblog is a  website about movie reviews, tv show/series reviews and anime reviews">

  <link rel='stylesheet' type='text/css' media='screen' href='../assert/css/style.css' async>
  <link rel='stylesheet' type='text/css' media='screen' href='../assert/css/mob_style.css' async>

  <link rel="icon" type="image/x-icon" href="../assert/img/favicon.ico" async>

  <script src="https://kit.fontawesome.com/4e00cb04a3.js" async crossorigin="anonymous"></script>
  <link rel="preconnect" async href="https://fonts.googleapis.com">
  <link rel="preconnect" async href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet" async>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" async>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet" async>

  <style>
    @keyframes slideIn {
      from {
        transform: translateX(400px);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slideOut {
      from {
        transform: translateX(0);
        opacity: 1;
      }

      to {
        transform: translateX(400px);
        opacity: 0;
      }
    }
  </style>

  <script>
  </script>
</head>

<body>
  <?php
  require_once __DIR__ . '/../includes/session.php';
  require_once __DIR__ . '/../config/config.php';
  require_once __DIR__ . '/../model/reviewmodel.php';

  // Redirect if not logged in
  if (!isLoggedIn()) {
    header("Location: ../login.php");
    exit;
  }

  $currentUser = getCurrentUser();
  $db = (new config())->connect();
  $reviewModel = new ReviewModel($db);

  // Fetch user's complete profile
  require_once __DIR__ . '/../model/usermodel.php';
  $userModel = new usermodel($db);
  $userProfile = $userModel->getUserById($currentUser['userid']);

  // Fetch user's watched movies and reviews
  $watchedMovies = $reviewModel->getUserWatchedList($currentUser['userid']);
  $userReviews = $reviewModel->getUserReviews($currentUser['userid']);

  // Decode top 5 movies
  $top5Movies = !empty($userProfile['top5_movies']) ? json_decode($userProfile['top5_movies'], true) : [];
  ?>

  <nav class="mynav">
    <div class="spaceforlogo">
      <a href="../index.php" class="homelinkd">CINEBLOG</a>
    </div>
    <div class="linkorder">
      <a href="../movies.php" class="nostyle">MOVIES</a>
      <a href="../tseries.php" class="nostyle">T SERIES</a>
      <a href="../anime.php" class="nostyle">ANIME</a>
    </div>
    <div class="spaceforsearch">
      <i class="fa-solid fa-magnifying-glass" onclick="toggleSearch()"></i>
      <input class="searchbarr" type="text" id="input-box" placeholder="Type to search...">
      <div class="result-box hmm"></div>
      <script src='../assert/js/allwork.js'></script>
    </div>
    <div class="loginsignup">
      <?php if (isLoggedIn()): ?>
        <a href="../logout.php" class="nostyle">LOGOUT</a>
      <?php else: ?>
        <a href="../login.php" class="nostyle">LOGIN</a>
      <?php endif; ?>
    </div>
  </nav>

  <?php if (isset($_GET['success'])): ?>
    <div id="success-message" style="position: fixed; top: 20px; right: 20px; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); z-index: 9999; animation: slideIn 0.3s ease-out;">
      <?php
      if ($_GET['success'] === 'avatar_uploaded') echo '✓ Avatar uploaded successfully!';
      elseif ($_GET['success'] === 'bio_updated') echo '✓ Bio updated successfully!';
      elseif ($_GET['success'] === 'favorites_updated') echo '✓ Favorite updated successfully!';
      elseif ($_GET['success'] === 'favorite_deleted') echo '✓ Favorite deleted successfully!';
      elseif ($_GET['success'] === 'top5_updated') echo '✓ Top 5 movies updated successfully!';
      elseif ($_GET['success'] === 'movie_saved') echo '✓ Movie saved successfully!';
      elseif ($_GET['success'] === 'movie_deleted') echo '✓ Movie deleted successfully!';
      ?>
    </div>
    <script>
      setTimeout(function() {
        const msg = document.getElementById('success-message');
        if (msg) {
          msg.style.animation = 'slideOut 0.3s ease-in';
          setTimeout(() => msg.remove(), 300);
        }
      }, 3000);
    </script>
  <?php endif; ?>

  <?php if (isset($_GET['error'])): ?>
    <div id="error-message" style="position: fixed; top: 20px; right: 20px; background: #f44336; color: white; padding: 15px 25px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); z-index: 9999; animation: slideIn 0.3s ease-out;">
      ✗ <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
    <script>
      setTimeout(function() {
        const msg = document.getElementById('error-message');
        if (msg) {
          msg.style.animation = 'slideOut 0.3s ease-in';
          setTimeout(() => msg.remove(), 300);
        }
      }, 3000);
    </script>
  <?php endif; ?>
  <div class="prof">
    <div class="profile-card">
      <div class="profile-header">
        <h2><?php echo htmlspecialchars($currentUser['username']); ?> <span class="flag">🇱🇰</span></h2>
        <span style="width: 20%;"><img id="profile-img" src="get_avatar.php?id=<?php echo $currentUser['userid']; ?>&t=<?php echo time(); ?>" alt="Profile Picture" class="profile-img"></span>
      </div>
      <p id="bio"><?php echo !empty($userProfile['bio']) ? htmlspecialchars($userProfile['bio']) : 'Click the edit button to add your bio...'; ?></p>
      <button class="edit-btn" onclick="openModal()">✏️</button>

    </div>

    <!-- Modal for Editing -->
    <div id="edit-modal" class="personalmodal">
      <div class="personalmodal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Edit Profile</h2>
        <form method="POST" action="../controller/userController.php" enctype="multipart/form-data">
          <label>Update Profile Picture (Max 200KB):</label>
          <input type="file" id="upload-img" name="avatar" accept="image/*" onchange="previewImage(event)" required>
          <small>Allowed formats: JPG, PNG, GIF, WEBP. Max size: 200KB</small>
          <br><br>
          <button type="submit" name="upload_avatar">Upload Avatar</button>
        </form>
        <hr>
        <form method="POST" action="../controller/userController.php">
          <label>Edit Bio:</label>
          <textarea id="edit-bio" name="bio" rows="3"><?php echo htmlspecialchars($userProfile['bio'] ?? ''); ?></textarea>
          <button type="submit" name="update_bio">Save Bio</button>
        </form>
      </div>
    </div>
  </div>
  </div>

  <div class="castbox1">
    <h2 style="text-align: center; width: 100%; margin: 20px 0;">My Favorites</h2>

    <div class="castdit">
      <p class="role1">Fav. Director</p>
      <p class="castname"><?php echo !empty($userProfile['favorite_director']) ? htmlspecialchars($userProfile['favorite_director']) : 'Not set'; ?></p>
      <?php if (!empty($userProfile['favorite_director'])): ?>
        <button class="edit-btn" onclick="editFavorite('director', '<?php echo htmlspecialchars($userProfile['favorite_director'], ENT_QUOTES); ?>')" style="margin: 5px;">✏️</button>
        <button class="edit-btn" onclick="deleteFavorite('director')" style="margin: 5px; background: red;">🗑️</button>
      <?php else: ?>
        <button class="edit-btn" onclick="addFavorite('director')" style="margin: 5px;">➕ Add</button>
      <?php endif; ?>
    </div>
    <div class="castdit">
      <p class="role1">Fav. Actor</p>
      <p class="castname"><?php echo !empty($userProfile['favorite_actor']) ? htmlspecialchars($userProfile['favorite_actor']) : 'Not set'; ?></p>
      <?php if (!empty($userProfile['favorite_actor'])): ?>
        <button class="edit-btn" onclick="editFavorite('actor', '<?php echo htmlspecialchars($userProfile['favorite_actor'], ENT_QUOTES); ?>')" style="margin: 5px;">✏️</button>
        <button class="edit-btn" onclick="deleteFavorite('actor')" style="margin: 5px; background: red;">🗑️</button>
      <?php else: ?>
        <button class="edit-btn" onclick="addFavorite('actor')" style="margin: 5px;">➕ Add</button>
      <?php endif; ?>
    </div>
    <div class="castdit">
      <p class="role1">Fav. Actress</p>
      <p class="castname"><?php echo !empty($userProfile['favorite_actress']) ? htmlspecialchars($userProfile['favorite_actress']) : 'Not set'; ?></p>
      <?php if (!empty($userProfile['favorite_actress'])): ?>
        <button class="edit-btn" onclick="editFavorite('actress', '<?php echo htmlspecialchars($userProfile['favorite_actress'], ENT_QUOTES); ?>')" style="margin: 5px;">✏️</button>
        <button class="edit-btn" onclick="deleteFavorite('actress')" style="margin: 5px; background: red;">🗑️</button>
      <?php else: ?>
        <button class="edit-btn" onclick="addFavorite('actress')" style="margin: 5px;">➕ Add</button>
      <?php endif; ?>
    </div>
  </div>

  <!-- Single Favorite Edit Modal -->
  <div id="favorite-modal" class="personalmodal">
    <div class="personalmodal-content">
      <span class="close" onclick="closeFavoriteModal()">&times;</span>
      <h2 id="favorite-modal-title">Add Favorite</h2>
      <form method="POST" action="../controller/userController.php">
        <input type="hidden" name="favorite_type" id="favorite_type">
        <label id="favorite-label">Name:</label>
        <input type="text" name="favorite_value" id="favorite_value" placeholder="Enter name" required>
        <br><br>
        <button type="submit" name="update_single_favorite">Save</button>
      </form>
    </div>
  </div>

  <div class="titlebox">
    <div class="title2_user">
      <h1 class="headtitle_user">My Top 5 Movies
        <?php if (count($top5Movies) < 5): ?>
          <button class="edit-btn" onclick="openAddMovieModal()" style="margin-left: 10px;">➕ Add Movie</button>
        <?php endif; ?>
      </h1>
    </div>

    <div class="boxes" id="top5-container">
      <?php if (!empty($top5Movies)): ?>
        <?php foreach ($top5Movies as $index => $movie): ?>
          <div class="box" style="position: relative;">
            <?php if (!empty($movie['poster_id'])): ?>
              <img src="get_poster.php?id=<?php echo intval($movie['poster_id']); ?>&t=<?php echo time(); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>" class="boximg" onerror="this.style.display='none';">
            <?php else: ?>
              <div class="boximg" style="background: #ddd; display: flex; align-items: center; justify-content: center; color: #666;">No Poster</div>
            <?php endif; ?>
            <p class="moviename"><?php echo htmlspecialchars($movie['title']); ?></p>
            <div style="padding: 10px;">
              <button class="edit-btn" onclick="editMovie(<?php echo $index; ?>, '<?php echo htmlspecialchars($movie['title'], ENT_QUOTES); ?>', '<?php echo !empty($movie['poster_id']) ? intval($movie['poster_id']) : ''; ?>')" style="margin: 2px;">✏️</button>
              <button class="edit-btn" onclick="deleteMovie(<?php echo $index; ?>)" style="margin: 2px; background: red;">🗑️</button>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p style="padding: 20px;">No top 5 movies set. Click "Add Movie" to add your favorites!</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Single Movie Add/Edit Modal -->
  <div id="movie-modal" class="personalmodal">
    <div class="personalmodal-content" style="max-width: 500px;">
      <span class="close" onclick="closeMovieModal()">&times;</span>
      <h2 id="movie-modal-title">Add Movie</h2>
      <form method="POST" action="../controller/userController.php" enctype="multipart/form-data">
        <input type="hidden" name="movie_index" id="movie_index" value="-1">
        <input type="hidden" name="existing_poster" id="existing_poster" value="">
        <label>Movie Title:</label>
        <input type="text" name="movie_title" id="movie_title" placeholder="e.g., Inception" required>
        <br><br>
        <label>Poster Image (Max 500KB):</label>
        <input type="file" name="movie_poster" id="movie_poster_file" accept="image/*" onchange="previewMoviePoster(event)">
        <small style="display: block; margin-top: 5px;">Upload JPG, PNG, GIF, or WEBP. Max size: 500KB</small>
        <br>
        <div id="poster-preview" style="margin: 10px 0;">
          <img id="poster-preview-img" src="" alt="Poster Preview" style="max-width: 200px; display: none; border: 2px solid #ddd; border-radius: 5px;">
        </div>
        <br>
        <button type="submit" name="save_single_movie">Save Movie</button>
      </form>
    </div>
  </div>
  <div class="titlebox">
    <div class="title2_user">
      <h1 class="headtitle_user">Watched Movies</h1>
    </div>

    <div class="boxes" id="containerr4">
      <?php if (!empty($watchedMovies)): ?>
        <?php foreach ($watchedMovies as $movie): ?>
          <div class="box">
            <p class="moviename"><?php echo htmlspecialchars($movie['movie_title']); ?></p>
            <small style="display: block; padding: 5px;"><?php echo htmlspecialchars($movie['movie_type']); ?></small>
            <small style="display: block; padding: 5px;">Watched: <?php echo date('M d, Y', strtotime($movie['watched_at'])); ?></small>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p style="padding: 20px;">No movies watched yet. Start exploring!</p>
      <?php endif; ?>
    </div>
  </div>

  <div class="titlebox">
    <div class="title2_user">
      <h1 class="headtitle_user">Review History</h1>
    </div>

    <div class="boxes" id="review-history">
      <?php if (!empty($userReviews)): ?>
        <?php foreach ($userReviews as $review): ?>
          <div class="box" style="padding: 15px; text-align: left;">
            <h3 style="margin: 0 0 10px 0;"><?php echo htmlspecialchars($review['movie_title']); ?></h3>
            <?php if ($review['rating']): ?>
              <p style="margin: 5px 0;"><strong>Rating:</strong> <?php echo htmlspecialchars($review['rating']); ?>/10</p>
            <?php endif; ?>
            <p style="margin: 10px 0;"><?php echo htmlspecialchars(substr($review['review_text'], 0, 150)) . (strlen($review['review_text']) > 150 ? '...' : ''); ?></p>
            <small>Posted: <?php echo date('M d, Y', strtotime($review['created_at'])); ?>
              <?php if ($review['is_edited']): ?>
                <em>(Edited)</em>
              <?php endif; ?>
            </small>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p style="padding: 20px;">No reviews yet. Share your thoughts on movies you've watched!</p>
      <?php endif; ?>
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

    // Favorite functions
    function addFavorite(type) {
      document.getElementById("favorite-modal-title").innerText = "Add Favorite " + type.charAt(0).toUpperCase() + type.slice(1);
      document.getElementById("favorite-label").innerText = "Favorite " + type.charAt(0).toUpperCase() + type.slice(1) + ":";
      document.getElementById("favorite_type").value = type;
      document.getElementById("favorite_value").value = "";
      document.getElementById("favorite-modal").style.display = "flex";
    }

    function editFavorite(type, currentValue) {
      document.getElementById("favorite-modal-title").innerText = "Edit Favorite " + type.charAt(0).toUpperCase() + type.slice(1);
      document.getElementById("favorite-label").innerText = "Favorite " + type.charAt(0).toUpperCase() + type.slice(1) + ":";
      document.getElementById("favorite_type").value = type;
      document.getElementById("favorite_value").value = currentValue;
      document.getElementById("favorite-modal").style.display = "flex";
    }

    function deleteFavorite(type) {
      if (confirm("Are you sure you want to delete this favorite?")) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../controller/userController.php';

        const typeInput = document.createElement('input');
        typeInput.type = 'hidden';
        typeInput.name = 'favorite_type';
        typeInput.value = type;

        const deleteInput = document.createElement('input');
        deleteInput.type = 'hidden';
        deleteInput.name = 'delete_favorite';
        deleteInput.value = '1';

        form.appendChild(typeInput);
        form.appendChild(deleteInput);
        document.body.appendChild(form);
        form.submit();
      }
    }

    function closeFavoriteModal() {
      document.getElementById("favorite-modal").style.display = "none";
    }

    // Movie functions
    function openAddMovieModal() {
      document.getElementById("movie-modal-title").innerText = "Add Movie";
      document.getElementById("movie_index").value = "-1";
      document.getElementById("movie_title").value = "";
      document.getElementById("existing_poster").value = "";
      document.getElementById("movie_poster_file").value = "";
      document.getElementById("poster-preview-img").style.display = "none";
      document.getElementById("movie-modal").style.display = "flex";
    }

    function editMovie(index, title, posterId) {
      document.getElementById("movie-modal-title").innerText = "Edit Movie";
      document.getElementById("movie_index").value = index;
      document.getElementById("movie_title").value = title;
      document.getElementById("existing_poster").value = posterId;
      document.getElementById("movie_poster_file").value = "";

      // Show existing poster preview from database
      if (posterId) {
        document.getElementById("poster-preview-img").src = 'get_poster.php?id=' + posterId + '&t=' + Date.now();
        document.getElementById("poster-preview-img").style.display = "block";
      } else {
        document.getElementById("poster-preview-img").style.display = "none";
      }

      document.getElementById("movie-modal").style.display = "flex";
    }

    function previewMoviePoster(event) {
      const file = event.target.files[0];
      if (file) {
        // Check file size (500KB = 512000 bytes)
        if (file.size > 512000) {
          alert("File size must be 500KB or less!");
          event.target.value = "";
          document.getElementById("poster-preview-img").style.display = "none";
          return;
        }

        const reader = new FileReader();
        reader.onload = function() {
          document.getElementById("poster-preview-img").src = reader.result;
          document.getElementById("poster-preview-img").style.display = "block";
        }
        reader.readAsDataURL(file);
      }
    }

    function deleteMovie(index) {
      if (confirm("Are you sure you want to delete this movie from your top 5?")) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../controller/userController.php';

        const indexInput = document.createElement('input');
        indexInput.type = 'hidden';
        indexInput.name = 'movie_index';
        indexInput.value = index;

        const deleteInput = document.createElement('input');
        deleteInput.type = 'hidden';
        deleteInput.name = 'delete_movie';
        deleteInput.value = '1';

        form.appendChild(indexInput);
        form.appendChild(deleteInput);
        document.body.appendChild(form);
        form.submit();
      }
    }

    function closeMovieModal() {
      document.getElementById("movie-modal").style.display = "none";
    }

    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        document.getElementById("profile-img").src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
      if (event.target.classList.contains('personalmodal')) {
        event.target.style.display = "none";
      }
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
        <li> <a class="footlink" href="movies.html">
            <h3>MOVIES</h3>
          </a></li>
        <li><a class="footlink" href="movies.html#toprmovies">TOP RATED MOVIES</a></li>
        <li><a class="footlink" href="movies.html#newmovies">NEW & UPCOMING MOVIES</a></li>
        <li><a class="footlink" href="movies.html#sinhalamovies">SINHALA & INDIAN MOVIES</a></li>
        <li><a class="footlink" href="movies.html#classicmovies">CLASSIC MOVIES</a></li>
      </ul>
    </div>

    <div class="footerboxes">
      <ul class="footerul">
        <li><a class="footlink" href="tseries.html">
            <h3>T-SERIES</h3>
          </a></li>
        <li><a class="footlink" href="tseries.html#topratedseries">TOP RATED SERIES</a></li>
        <li><a class="footlink" href="tseries.html#animetedseries">ANIMATED SERIES & SITCOM</a></li>
        <li><a class="footlink" href="tseries.html#mcundcu">MCU & DCU</a></li>
      </ul>
    </div>

    <div class="footerboxes">
      <ul class="footerul">
        <li><a class="footlink" href="anime.html">
            <h3>ANIME</h3>
          </a></li>
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
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 8000); // Change image every 8 seconds
    }
  </script>
  <script src="../assert/js/scrollleftright.js"></script>
</body>

</html>