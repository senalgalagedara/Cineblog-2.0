<?php
require_once __DIR__ . '/session.php';
$currentUser = getCurrentUser();
?>
<style>
.styled-button {
  position: relative;
  padding:  2px 10px !important;
  font-size: 1.1rem;
  font-weight: normal;
  font-family: 'Poppins', sans-serif;
  color: #ffffff;
  cursor: pointer;
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-decoration: none; 
}

.user-account-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(187, 134, 252, 0.5) !important;
  background: linear-gradient(135deg, #C794FF, #8B5FFF) !important;
}

.user-account-btn:active {
  transform: translateY(0);
  box-shadow: 0 2px 8px rgba(187, 134, 252, 0.4) !important;
}

.user-account-btn i {
  transition: transform 0.3s ease;
  background: none;
}

</style>
<link rel="stylesheet" href="../assert/css/style.css">
<nav class="mynav">
    <div class="spaceforlogo">
        <a href="/movieblog/index.php" class="homelinkd">CINEBLOG</a>
    </div>
    <div class="linkorder">
        <a href="/movieblog/movies.php" class="nostyle">MOVIES</a>
        <a href="/movieblog/tseries.php" class="nostyle">T SERIES</a>
        <a href="/movieblog/anime.php" class="nostyle">ANIME</a>
    </div>
    <div class="spaceforsearch">
        <i class="fa-solid fa-magnifying-glass" onclick="toggleSearch()"></i>
        <input class="searchbarr" type="text" id="input-box" placeholder="Type to search...">
        <div class="result-box hmm"></div>
        <script src='/movieblog/assert/js/allwork.js'></script>
    </div>
    <div class="loginsignup" style="display: flex; align-items: center; gap: 10px;">
        <?php if ($currentUser): ?>
            <a href="/movieblog/user/user_account.php" class="nostyle user-account-btn" style="padding: 12px 25px; background: linear-gradient(135deg, #BB86FC, #7C4DFF); border-radius: 25px; color: white; text-decoration: none; display: flex; align-items: center; gap: 10px; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(187, 134, 252, 0.3);">
                <i class="fa-solid fa-user-circle" style="font-size: 1.3rem;"></i>
                <span><?php echo htmlspecialchars($currentUser['username']); ?></span>
            </a>
        <?php else: ?>
            <a href="/movieblog/login.php" class="styled-button">
                Login
                <div class="inner-button">
                    <i class="icon fa-solid fa-sign-in-alt"></i>
                </div>
            </a>
            <a href="/movieblog/register.php" class="styled-button">
                Register
                <div class="inner-button">
                    <i class="icon fa-solid fa-user-plus"></i>
                </div>
            </a>
        <?php endif; ?>
    </div>
</nav>
