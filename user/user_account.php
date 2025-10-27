<?php
// Initialize session and load user data BEFORE any output to avoid header issues
require_once __DIR__ . '/../includes/session.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/reviewmodel.php';
require_once __DIR__ . '/../model/usermodel.php';

// Check if viewing someone else's profile
$isViewerMode = false;
$viewUserId = null;

// Handle clean URL parameter (username-based)
if (isset($_GET['view_user']) && !empty($_GET['view_user'])) {
  $isViewerMode = true;
  $viewUsername = trim($_GET['view_user']);
  
  // Get user ID from username
  $db = (new config())->connect();
  $userModel = new usermodel($db);
  $viewerProfile = $userModel->getUserByUsername($viewUsername);
  
  if ($viewerProfile) {
    $viewUserId = $viewerProfile['userid'];
  } else {
    die("User not found");
  }
}
// Handle legacy URL parameter (ID-based) - for backward compatibility
elseif (isset($_GET['view']) && !empty($_GET['view'])) {
  $isViewerMode = true;
  $viewUserId = intval($_GET['view']);
}

// If not in viewer mode and not logged in, redirect to login
if (!$isViewerMode && !isLoggedIn()) {
  header("Location: ../login.php");
  exit;
}

$db = (new config())->connect();
$reviewModel = new ReviewModel($db);
$userModel = new usermodel($db);

// Determine which user's profile to display
if ($isViewerMode) {
  // Viewing another user's profile
  $currentUser = ['userid' => $viewUserId];
  $userProfile = $userModel->getUserById($viewUserId);
  
  // If user doesn't exist, show error
  if (!$userProfile) {
    die("User not found");
  }
} else {
  // Viewing own profile
  $currentUser = getCurrentUser();
  $userProfile = $userModel->getUserById($currentUser['userid']);
}

// Fetch user's watched movies and reviews
$watchedMovies = $reviewModel->getUserWatchedList($currentUser['userid']);
$userReviews = $reviewModel->getUserReviews($currentUser['userid']);

// Decode top 5 movies
$top5Movies = !empty($userProfile['top5_movies']) ? json_decode($userProfile['top5_movies'], true) : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title><?php echo $isViewerMode ? htmlspecialchars($userProfile['username']) . "'s Profile - CINEBLOG" : "CINEBLOG - User Account"; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cineblog.lankanblog is a  website about movie reviews, tv show/series reviews and anime reviews">

  <link rel='stylesheet' type='text/css' media='screen' href='../assert/css/style.css' async>
  <link rel='stylesheet' type='text/css' media='screen' href='../assert/css/mob_style.css' async>

  <link rel="icon" type="image/x-icon" href="../assert/img/favicon.ico" async>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/4e00cb04a3.js" async crossorigin="anonymous"></script>
  <link rel="preconnect" async href="https://fonts.googleapis.com">
  <link rel="preconnect" async href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet" async>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" async>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet" async>

  <style>
    :root {
      --primary-purple: #BB86FC;
      --primary-teal: #03DAC5;
      --bg-dark: #121212;
      --bg-secondary: #1E1E1E;
      --bg-card: #282828;
      --bg-hover: #333333;
      --text-primary: #FFFFFF;
      --text-secondary: #B3B3B3;
      --success: #4CAF50;
      --error: #f44336;
      --border-color: #404040;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0f0f0f 100%);
      min-height: 100vh;
    }

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

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
    }

    /* Container Styles */
    .user-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px;
      animation: fadeInUp 0.6s ease-out;
    }

    /* Profile Card Enhanced */
    .profile-card {
      background: linear-gradient(135deg, #1e1e1e 0%, #282828 100%);
      border: 1px solid var(--border-color);
      border-radius: 20px;
      padding: 40px;
      margin-bottom: 30px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .profile-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-purple), var(--primary-teal));
    }
    .profile-header {
      display: flex;
      align-items: center;
      gap: 30px;
      margin-bottom: 20px;
    }

    .profile-img-container {
      position: relative;
      flex-shrink: 0;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid var(--border-color);
      object-fit: cover;
      transition: all 0.3s ease;
    }

    .profile-info {
      flex: 1;
    }

    .profile-info h2 {
      color: var(--text-primary);
      font-size: 2.5rem;
      margin: 0 0 10px 0;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .share-btn {
      background: linear-gradient(135deg, var(--primary-teal), #02b8a8);
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      width: fit-content;
      gap: 6px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(3, 218, 197, 0.3);
    }

    .share-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(3, 218, 197, 0.5);
    }

    .share-btn .material-icons {
      font-size: 18px;
    }

    .share-tooltip {
      position: fixed;
      background: var(--success);
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 0.9rem;
      z-index: 10001;
      animation: fadeInUp 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .viewer-badge {
      background: linear-gradient(135deg, #ff6b35, #f7931e);
      color: white;
      padding: 15px 30px;
      border-radius: 15px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.1rem;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
      animation: fadeInUp 0.5s ease;
    }

    .viewer-badge .material-icons {
      font-size: 24px;
    }

    .viewer-badge {
      background: linear-gradient(135deg, #FF6B6B, #FF8E53);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(255, 107, 107, 0.3);
    }

    .viewer-badge .material-icons {
      font-size: 18px;
    }

    .country-badge {
      background: var(--primary-teal);
      color: var(--bg-dark);
      padding: 4px 12px;
      border-radius: 12px;
      font-size: 0.9rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    #bio {
      color: var(--text-secondary);
      font-size: 1rem;
      line-height: 1.6;
      margin: 10px 0;
      font-style: italic;
    }

    /* Favorites Section */
    .castbox1 {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: 20px;
      padding: 30px;
      width: 100%;
      display: block;
      margin-bottom: 30px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    }

    .castbox1 h2 {
      color: var(--primary-purple);
      font-size: 2rem;
      margin-bottom: 30px;
      text-align: left !important;
      font-family: 'Montserrat', sans-serif;
    }

    .castdit {
      background: var(--bg-secondary);
      border: 1px solid var(--border-color);
      border-radius: 15px;
      width: 70%;
      padding: 20px;
      margin: 15px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all 0.3s ease;
    }

    .role1 {
      color: var(--primary-teal);
      font-weight: 600;
      font-size: 1.1rem;
      min-width: 150px;
    }

    .castname {
      color: var(--text-primary);
      font-size: 1.1rem;
      flex: 1;
      margin: 0 15px;
    }

    /* Title Box Enhanced */
    .titlebox {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: 20px;
      padding: 30px;
      margin: 30px 0;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    }

    .title2_user {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .headtitle_user {
      color: var(--primary-purple);
      font-size: 2rem;
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }

    /* Movie Boxes */
    .boxes {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
      padding: 20px 0;
    }

    .box {
      background: var(--bg-secondary);
      border: 1px solid var(--border-color);
      border-radius: 15px;
      padding: 15px;
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: auto;
      width: 100%;
    }


    .boximg {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    .moviename {
      color: var(--text-primary);
      font-size: 1rem;
      text-align: center;
      font-weight: 600;
      margin: 10px 0;
      height: auto;
      width: 100%;
    }

    /* Modal Enhanced */
    .personalmodal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(10px);
      justify-content: center;
      align-items: center;
      z-index: 9999;
      animation: fadeInUp 0.3s ease;
    }

    .personalmodal-content {
      background: linear-gradient(135deg, #1e1e1e 0%, #282828 100%);
      border: 1px solid var(--border-color);
      padding: 40px;
      border-radius: 20px;
      max-width: 600px;
      width: 90%;
      max-height: 90vh;
      overflow-y: auto;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
      position: relative;
    }

    .personalmodal-content h2 {
      color: var(--primary-purple);
      font-size: 2rem;
      margin-bottom: 30px;
      font-family: 'Montserrat', sans-serif;
    }

    .personalmodal-content label {
      color: var(--text-primary);
      font-size: 1rem;
      font-weight: 600;
      display: block;
      margin: 20px 0 10px;
    }

    .personalmodal-content input[type="text"],
    .personalmodal-content input[type="file"],
    .personalmodal-content textarea {
      width: 100%;
      padding: 15px;
      background: var(--bg-dark);
      border: 2px solid var(--border-color);
      border-radius: 10px;
      color: var(--text-primary);
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .personalmodal-content input[type="text"]:focus,
    .personalmodal-content textarea:focus {
      outline: none;
      border-color: var(--primary-purple);
    }

    .personalmodal-content button[type="submit"] {
      width: 100%;
      padding: 15px;
      background: linear-gradient(135deg, var(--primary-purple), var(--primary-teal));
      border: none;
      color: white;
      border-radius: 10px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      margin-top: 20px;
      transition: all 0.3s ease;
    }

    .close {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 2rem;
      color: var(--text-secondary);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    #success-message,
    #error-message {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 20px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
      z-index: 10000;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 1rem;
      animation: slideIn 0.3s ease-out;
    }

    #success-message {
      background: linear-gradient(135deg, #4CAF50, #45a049);
      color: white;
    }

    #error-message {
      background: linear-gradient(135deg, #f44336, #d32f2f);
      color: white;
    }

    /* Scrollbar Styling */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: var(--bg-dark);
    }

    ::-webkit-scrollbar-thumb {
      background: var(--primary-purple);
      border-radius: 5px;
    }
    /* Poster Preview */
    #poster-preview-img {
      max-width: 100%;
      max-height: 300px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
      margin: 20px auto;
      display: block;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .profile-header {
        flex-direction: column;
        text-align: center;
      }

      .profile-info h2 {
        font-size: 1.8rem;
        justify-content: center;
      }

      .boxes {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 15px;
      }

      .castdit {
        flex-direction: column;
        text-align: center;
      }

      .role1 {
        min-width: auto;
        margin-bottom: 10px;
      }
    }

    /* Small text styling */
    small {
      color: var(--text-secondary);
      font-size: 0.85rem;
    }

    /* Form spacing */
    form hr {
      border: none;
      border-top: 1px solid var(--border-color);
      margin: 30px 0;
    }
  </style>

  <script>
  </script>
</head>

<body>

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
        <a href="../logout.php" class="nostyle" style="margin:5px; padding: 10px 40px; background: #353535ff; border-radius: 5px; color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">LOGOUT</a>
      <?php else: ?>
        <a href="../login.php" class="nostyle">LOGIN</a>
      <?php endif; ?>
    </div>
  </nav>

  <?php if (isset($_GET['success'])): ?>
    <div id="success-message" style="position: fixed; top: 20px; right: 20px; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); z-index: 9999; animation: slideIn 0.3s ease-out; display: flex; align-items: center; gap: 10px;">
      <span class="material-icons">check_circle</span>
      <?php
      if ($_GET['success'] === 'avatar_uploaded') echo 'Avatar uploaded successfully!';
      elseif ($_GET['success'] === 'bio_updated') echo 'Bio updated successfully!';
      elseif ($_GET['success'] === 'favorites_updated') echo 'Favorite updated successfully!';
      elseif ($_GET['success'] === 'favorite_deleted') echo 'Favorite deleted successfully!';
      elseif ($_GET['success'] === 'top5_updated') echo 'Top 5 movies updated successfully!';
      elseif ($_GET['success'] === 'movie_saved') echo 'Movie saved successfully!';
      elseif ($_GET['success'] === 'movie_deleted') echo 'Movie deleted successfully!';
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
    <div id="error-message" style="position: fixed; top: 20px; right: 20px; background: #f44336; color: white; padding: 15px 25px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); z-index: 9999; animation: slideIn 0.3s ease-out; display: flex; align-items: center; gap: 10px;">
      <span class="material-icons">error</span>
      <?php echo htmlspecialchars($_GET['error']); ?>
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

  <div class="user-container">
    <?php if ($isViewerMode): ?>
      <div class="viewer-badge">
        <span class="material-icons">visibility</span>
        Viewing <?php echo htmlspecialchars($userProfile['username']); ?>'s Profile
        <?php if (isLoggedIn()): ?>
          <a href="user_account.php" style="margin-left: 15px; color: white; text-decoration: none; border-left: 2px solid rgba(255,255,255,0.3); padding-left: 15px; display: inline-flex; align-items: center; gap: 4px;">
            <span class="material-icons" style="font-size: 16px;">arrow_back</span>
            Back to My Profile
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    
    <div class="profile-card">
      <div class="profile-header">
        <div class="profile-img-container">
          <img id="profile-img" src="get_avatar.php?id=<?php echo $currentUser['userid']; ?>&t=<?php echo time(); ?>" alt="Profile Picture" class="profile-img">
        </div>
        <div class="profile-info">
          <h2>
            <?php echo htmlspecialchars($userProfile['username']); ?> 
            <?php if (!$isViewerMode): ?>
              <button class="share-btn" onclick="shareProfile()">
                <span class="material-icons">share</span>
              </button>
            <?php endif; ?>
          </h2>
          <p id="bio"><?php echo !empty($userProfile['bio']) ? htmlspecialchars($userProfile['bio']) : ($isViewerMode ? 'No bio yet' : 'Click the edit button to add your bio...'); ?></p>
          <?php if (!$isViewerMode): ?>
            <button class="edit-btn" onclick="openModal()"><span class="material-icons">edit</span> Edit Profile</button>
          <?php endif; ?>
        </div>
      </div>
    </div>

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

    <div class="castbox1">
      <h2><span class="material-icons" style="vertical-align: middle; margin-right: 8px;">star</span>My Favorites</h2>

      <div class="castdit">
        <p class="role1"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 20px;">movie</span>Favorite Director</p>
        <p class="castname"><?php echo !empty($userProfile['favorite_director']) ? htmlspecialchars($userProfile['favorite_director']) : 'Not set'; ?></p>
        <?php if (!$isViewerMode): ?>
        <div>
          <?php if (!empty($userProfile['favorite_director'])): ?>
            <button class="edit-btn" onclick="editFavorite('director', '<?php echo htmlspecialchars($userProfile['favorite_director'], ENT_QUOTES); ?>')"><span class="material-icons">edit</span> Edit</button>
            <button class="edit-btn delete" onclick="deleteFavorite('director')"><span class="material-icons">delete</span> Delete</button>
          <?php else: ?>
            <button class="edit-btn add" onclick="addFavorite('director')"><span class="material-icons">add</span> Add</button>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="castdit">
        <p class="role1"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 20px;">person</span>Favorite Actor</p>
        <p class="castname"><?php echo !empty($userProfile['favorite_actor']) ? htmlspecialchars($userProfile['favorite_actor']) : 'Not set'; ?></p>
        <?php if (!$isViewerMode): ?>
        <div>
          <?php if (!empty($userProfile['favorite_actor'])): ?>
            <button class="edit-btn" onclick="editFavorite('actor', '<?php echo htmlspecialchars($userProfile['favorite_actor'], ENT_QUOTES); ?>')"><span class="material-icons">edit</span> Edit</button>
            <button class="edit-btn delete" onclick="deleteFavorite('actor')"><span class="material-icons">delete</span> Delete</button>
          <?php else: ?>
            <button class="edit-btn add" onclick="addFavorite('actor')"><span class="material-icons">add</span> Add</button>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="castdit">
        <p class="role1"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 20px;">person</span>Favorite Actress</p>
        <p class="castname"><?php echo !empty($userProfile['favorite_actress']) ? htmlspecialchars($userProfile['favorite_actress']) : 'Not set'; ?></p>
        <?php if (!$isViewerMode): ?>
        <div>
          <?php if (!empty($userProfile['favorite_actress'])): ?>
            <button class="edit-btn" onclick="editFavorite('actress', '<?php echo htmlspecialchars($userProfile['favorite_actress'], ENT_QUOTES); ?>')"><span class="material-icons">edit</span> Edit</button>
            <button class="edit-btn delete" onclick="deleteFavorite('actress')"><span class="material-icons">delete</span> Delete</button>
          <?php else: ?>
            <button class="edit-btn add" onclick="addFavorite('actress')"><span class="material-icons">add</span> Add</button>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
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
        <h1 class="headtitle_user"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 32px;">movie_filter</span>My Top 5 Movies</h1>
        <?php if (!$isViewerMode && count($top5Movies) < 5): ?>
          <button class="edit-btn add" onclick="openAddMovieModal()"><span class="material-icons">add</span> Add Movie</button>
        <?php endif; ?>
      </div>

      <div class="boxes" id="top5-container">
        <?php if (!empty($top5Movies)): ?>
          <?php foreach ($top5Movies as $index => $movie): ?>
            <div class="box">
              <?php if (!empty($movie['poster_id'])): ?>
                <img src="get_poster.php?id=<?php echo intval($movie['poster_id']); ?>&t=<?php echo time(); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>" class="boximg" onerror="this.style.display='none';">
              <?php else: ?>
                <div class="boximg" style="background: linear-gradient(135deg, #333, #555); display: flex; align-items: center; justify-content: center; color: #999;">No Poster</div>
              <?php endif; ?>
              <p class="moviename"><?php echo htmlspecialchars($movie['title']); ?></p>
              <?php if (!$isViewerMode): ?>
              <div style="display: flex; gap: 10px; margin-top: 10px;">
                <button class="edit-btn" onclick="editMovie(<?php echo $index; ?>, '<?php echo htmlspecialchars($movie['title'], ENT_QUOTES); ?>', '<?php echo !empty($movie['poster_id']) ? intval($movie['poster_id']) : ''; ?>')"><span class="material-icons">edit</span></button>
                <button class="edit-btn delete" onclick="deleteMovie(<?php echo $index; ?>)"><span class="material-icons">delete</span></button>
              </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p style="padding: 20px; color: var(--text-secondary); text-align: center; width: 100%;">No top 5 movies set. Click "Add Movie" to add your favorites!</p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Single Movie Add/Edit Modal -->
    <div id="movie-modal" class="personalmodal">
      <div class="personalmodal-content" style="max-width: 600px;">
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
            <img id="poster-preview-img" src="" alt="Poster Preview" style="max-width: 200px; display: none;">
          </div>
          <br>
          <button type="submit" name="save_single_movie">Save Movie</button>
        </form>
      </div>
    </div>

    <div class="titlebox">
      <div class="title2_user">
        <h1 class="headtitle_user"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 32px;">visibility</span>Watched Movies</h1>
      </div>

      <div class="boxes" id="containerr4">
        <?php if (!empty($watchedMovies)): ?>
          <?php foreach ($watchedMovies as $movie): ?>
            <div class="box" style="height: auto;">
              <p class="moviename"><?php echo htmlspecialchars($movie['movie_title']); ?></p>
              <small style="display: block; padding: 5px; color: var(--primary-teal);"><?php echo htmlspecialchars($movie['movie_type']); ?></small>
              <small style="display: block; padding: 5px;">Watched: <?php echo date('M d, Y', strtotime($movie['watched_at'])); ?></small>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p style="padding: 20px; color: var(--text-secondary); text-align: center; width: 100%;">No movies watched yet. Start exploring!</p>
        <?php endif; ?>
      </div>
    </div>

    <div class="titlebox">
      <div class="title2_user">
        <h1 class="headtitle_user"><span class="material-icons" style="vertical-align: middle; margin-right: 8px; font-size: 32px;">rate_review</span>Review History</h1>
      </div>

      <div class="boxes" id="review-history">
        <?php if (!empty($userReviews)): ?>
          <?php foreach ($userReviews as $review): ?>
            <div class="box" style="padding: 20px; text-align: left; height: auto;">
              <h3 style="margin: 0 0 10px 0; color: var(--primary-purple);"><?php echo htmlspecialchars($review['movie_title']); ?></h3>
              <?php if ($review['rating']): ?>
                <p style="margin: 5px 0; color: var(--primary-teal);"><strong>Rating:</strong> <?php echo htmlspecialchars($review['rating']); ?>/10</p>
              <?php endif; ?>
              <p style="margin: 10px 0; color: var(--text-secondary);"><?php echo htmlspecialchars(substr($review['review_text'], 0, 150)) . (strlen($review['review_text']) > 150 ? '...' : ''); ?></p>
              <small style="color: var(--text-secondary);">Posted: <?php echo date('M d, Y', strtotime($review['created_at'])); ?>
                <?php if ($review['is_edited']): ?>
                  <em>(Edited)</em>
                <?php endif; ?>
              </small>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p style="padding: 20px; color: var(--text-secondary); text-align: center; width: 100%;">No reviews yet. Share your thoughts on movies you've watched!</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="space"></div>
  <script>
    // Clean up URL in address bar (remove query parameters)
    <?php if ($isViewerMode): ?>
      // Replace URL with clean version without reloading page
      if (window.history && window.history.replaceState) {
        const cleanUrl = window.location.origin + '/movieblog/user/profile/<?php echo htmlspecialchars($userProfile['username'], ENT_QUOTES); ?>';
        window.history.replaceState({}, document.title, cleanUrl);
      }
    <?php elseif (!$isViewerMode && isLoggedIn()): ?>
      // Clean own profile URL
      if (window.history && window.history.replaceState && window.location.search) {
        const cleanUrl = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanUrl);
      }
    <?php endif; ?>

    // Share Profile Function
    function shareProfile() {
      const username = '<?php echo htmlspecialchars($userProfile['username'], ENT_QUOTES); ?>';
      const shareUrl = window.location.origin + '/movieblog/user/profile/' + username;
      
      // Copy to clipboard
      navigator.clipboard.writeText(shareUrl).then(function() {
        // Show success tooltip
        showShareTooltip('Link copied to clipboard!');
      }).catch(function(err) {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = shareUrl;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        document.body.appendChild(textArea);
        textArea.select();
        try {
          document.execCommand('copy');
          showShareTooltip('Link copied to clipboard!');
        } catch (err) {
          showShareTooltip('Failed to copy link');
        }
        document.body.removeChild(textArea);
      });
    }

    function showShareTooltip(message) {
      const tooltip = document.createElement('div');
      tooltip.className = 'share-tooltip';
      tooltip.textContent = message;
      tooltip.style.top = '20px';
      tooltip.style.right = '20px';
      document.body.appendChild(tooltip);
      
      setTimeout(function() {
        tooltip.style.animation = 'slideOut 0.3s ease-in';
        setTimeout(() => tooltip.remove(), 300);
      }, 2000);
    }

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