<?php
require_once __DIR__ . '/session.php';
$currentUser = getCurrentUser();
?>
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
    <div class="loginsignup">
        <?php if ($currentUser): ?>
            <a href="/movieblog/user/user_account.php" class="nostyle" style="padding: 10px 20px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 5px; color: white; text-decoration: none;">
                <?php echo htmlspecialchars($currentUser['username']); ?>
            </a>
            <a href="/movieblog/logout.php" class="nostyle" style="padding: 10px 20px; margin-left: 10px; background: #dc3545; border-radius: 5px; color: white; text-decoration: none;">
                Logout
            </a>
        <?php else: ?>
            <a href="/movieblog/login.php" class="nostyle" style="padding: 10px 20px; background: #007bff; border-radius: 5px; color: white; text-decoration: none; margin-right: 10px;">
                Login
            </a>
            <a href="/movieblog/register.php" class="nostyle" style="padding: 10px 20px; background: #28a745; border-radius: 5px; color: white; text-decoration: none;">
                Register
            </a>
        <?php endif; ?>
    </div>
</nav>
