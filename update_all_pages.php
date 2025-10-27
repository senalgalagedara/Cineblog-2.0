<?php
/**
 * Bulk Update Script for Movie Review Pages
 * This script updates all movie review pages to use the new review system
 */

// Set longer execution time for processing all files
set_time_limit(300);

echo "<!DOCTYPE html><html><head><title>Bulk Update Progress</title>";
echo "<style>body{font-family:Arial,sans-serif;padding:20px;background:#f5f5f5;}";
echo ".success{color:green;}.error{color:red;}.warning{color:orange;}";
echo ".log{background:white;padding:15px;border-radius:5px;margin:10px 0;}";
echo "h2{color:#333;border-bottom:2px solid #007bff;padding-bottom:10px;}";
echo "</style></head><body>";
echo "<h1>🔄 Bulk Update Script - Movie Review System</h1>";

// Movie page mappings
$anime_movies = [
    'asilentvoice' => ['file' => 'asilentvoice.php', 'title' => 'A Silent Voice'],
    'attackontitan' => ['file' => 'attackontitan.php', 'title' => 'Attack On Titan'],
    'chainsawman' => ['file' => 'chainsawman.php', 'title' => 'Chainsaw Man'],
    'deathnote' => ['file' => 'deathnote.php', 'title' => 'Death Note'],
    'howlsmovingcastle' => ['file' => 'howlsmovingcastle.php', 'title' => 'Howls Moving Castle'],
    'iwanttoeatyourpancreas' => ['file' => 'iwanttoeatyourpancreas.php', 'title' => 'I Want to Eat Your Pancreas'],
    'jujutsukisen' => ['file' => 'jujutsukisen.php', 'title' => 'Jujutsu Kaisen'],
    'naruto' => ['file' => 'naruto.php', 'title' => 'Naruto'],
    'onepiece' => ['file' => 'onepiece.php', 'title' => 'One Piece'],
    'ponyo' => ['file' => 'ponyo.php', 'title' => 'Ponyo'],
    'spyfamily' => ['file' => 'spyfamily.php', 'title' => 'Spy Family'],
    'thegardenofwords' => ['file' => 'thegardenofwords.php', 'title' => 'The Garden of Words'],
    'yourname' => ['file' => 'yourname.php', 'title' => 'Your Name']
];

$movies = [
    '3idiots' => ['file' => '3idiots.php', 'title' => '3 Idiots'],
    'alokoudaadi' => ['file' => 'alokoudaadi.php', 'title' => 'Alokoudaadi'],
    'antman1' => ['file' => 'antman1.php', 'title' => 'Ant-Man'],
    'barbie' => ['file' => 'barbie.php', 'title' => 'Barbie'],
    'bullettrain' => ['file' => 'bullettrain.php', 'title' => 'Bullet Train'],
    'deadpoolwolverine' => ['file' => 'deadpoolwolverine.php', 'title' => 'Deadpool & Wolverine'],
    'dunepart2' => ['file' => 'dunepart2.php', 'title' => 'Dune Part 2'],
    'fightclub' => ['file' => 'fightclub.php', 'title' => 'Fight Club'],
    'giniavisahaginikeli' => ['file' => 'giniavisahaginikeli.php', 'title' => 'Ginia Visa Hagini Keli'],
    'ginnenupanseethala' => ['file' => 'ginnenupanseethala.php', 'title' => 'Ginnenu Panseethala'],
    'godzillaxkong' => ['file' => 'godzillaxkong.php', 'title' => 'Godzilla x Kong'],
    'johnwick4' => ['file' => 'johnwick4.php', 'title' => 'John Wick 4'],
    'kungfupanda4' => ['file' => 'kungfupanda4.php', 'title' => 'Kung Fu Panda 4'],
    'msdhoni' => ['file' => 'msdhoni.php', 'title' => 'MS Dhoni'],
    'oppenhimer' => ['file' => 'oppenhimer.php', 'title' => 'Oppenheimer'],
    'pulpfiction' => ['file' => 'pulpfiction.php', 'title' => 'Pulp Fiction'],
    'seven' => ['file' => 'seven.php', 'title' => 'Seven'],
    'shangchi' => ['file' => 'shangchi.php', 'title' => 'Shang-Chi'],
    'shawshankredemption' => ['file' => 'shawshankredemption.php', 'title' => 'The Shawshank Redemption'],
    'thefallguy' => ['file' => 'thefallguy.php', 'title' => 'The Fall Guy'],
    'thegodfather1' => ['file' => 'thegodfather1.php', 'title' => 'The Godfather'],
    'thegreenmile' => ['file' => 'thegreenmile.php', 'title' => 'The Green Mile'],
    'thewolfofwallstreet' => ['file' => 'thewolfofwallstreet.php', 'title' => 'The Wolf of Wall Street']
];

$series = [
    'bettercallsaul' => ['file' => 'bettercallsaul.php', 'title' => 'Better Call Saul'],
    'breakingbad' => ['file' => 'breakingbad.php', 'title' => 'Breaking Bad'],
    'daredevil' => ['file' => 'daredevil.php', 'title' => 'Daredevil'],
    'gameofthrones' => ['file' => 'gameofthrones.php', 'title' => 'Game of Thrones'],
    'loki' => ['file' => 'loki.php', 'title' => 'Loki'],
    'moneyheist' => ['file' => 'moneyheist.php', 'title' => 'Money Heist'],
    'peacemaker' => ['file' => 'peacemaker.php', 'title' => 'Peacemaker'],
    'prisonbreak' => ['file' => 'prisonbreak.php', 'title' => 'Prison Break'],
    'theflash' => ['file' => 'theflash.php', 'title' => 'The Flash'],
    'whatif' => ['file' => 'whatif.php', 'title' => 'What If...?']
];

$short_movies = [
    'asphodel' => ['file' => 'Asphodel.php', 'title' => 'Asphodel'],
    'her' => ['file' => 'her.php', 'title' => 'Her'],
    'thelastmonk' => ['file' => 'thelastmonk.php', 'title' => 'The Last Monk']
];

$stats = ['success' => 0, 'failed' => 0, 'skipped' => 0];

function updateMoviePage($filePath, $movieId, $movieTitle, $movieType) {
    global $stats;
    
    echo "<div class='log'>";
    echo "<strong>Processing:</strong> " . htmlspecialchars(basename($filePath)) . "<br>";
    
    if (!file_exists($filePath)) {
        echo "<span class='warning'>⚠️ File not found!</span></div>";
        $stats['skipped']++;
        return false;
    }
    
    $content = file_get_contents($filePath);
    $original_content = $content;
    
    // Step 1: Update the PHP header
    $oldHeader = "<?php require_once __DIR__ . '/../../includes/session.php'; ?>";
    $newHeader = "<?php \nrequire_once __DIR__ . '/../../includes/session.php'; \nrequire_once __DIR__ . '/../../includes/movie_helper.php';\n\n// Define movie details\n\$movie_id = '$movieId';\n\$movie_title = '$movieTitle';\n\$movie_type = '$movieType';\n?>";
    
    if (strpos($content, 'movie_helper.php') === false) {
        $content = str_replace($oldHeader, $newHeader, $content);
        echo "✓ Added movie helper include<br>";
    }
    
    // Step 2: Remove trailer section
    if (preg_match('/<div class="mvid">.*?<\/div>/s', $content)) {
        $content = preg_replace('/<div class="mvid">.*?<\/div>/s', '', $content);
        echo "✓ Removed trailer section<br>";
    }
    
    // Step 3: Remove Web3Forms review section and replace with new system
    if (strpos($content, 'web3forms.com') !== false) {
        // Find and replace the entire old review section
        $pattern = '/<div class="reviewspace">.*?<\/div>\s*<\/div>/s';
        if (preg_match($pattern, $content)) {
            $content = preg_replace($pattern, "<?php renderReviewSection(\$movie_id, \$movie_title, \$movie_type); ?>", $content);
            echo "✓ Replaced Web3Forms with new review system<br>";
        }
    }
    
    // Step 4: Add watchlist buttons
    if (strpos($content, 'renderWatchlistButtons') === false) {
        $content = str_replace(
            '<div class="movieratefinal">',
            "<?php renderWatchlistButtons(\$movie_id, \$movie_title, \$movie_type); ?>\n\n    <div class=\"movieratefinal\">",
            $content
        );
        echo "✓ Added watchlist/watched buttons<br>";
    }
    
    // Check if anything changed
    if ($content === $original_content) {
        echo "<span class='warning'>⚠️ No changes needed (already updated)</span></div>";
        $stats['skipped']++;
        return true;
    }
    
    // Save the updated content
    if (file_put_contents($filePath, $content)) {
        echo "<span class='success'>✅ Successfully updated!</span></div>";
        $stats['success']++;
        flush();
        return true;
    } else {
        echo "<span class='error'>❌ Failed to save!</span></div>";
        $stats['failed']++;
        return false;
    }
}

// Process all files
echo "<h2>📺 Updating Anime Pages</h2>";
foreach ($anime_movies as $id => $data) {
    $path = __DIR__ . '/revs/anime_rev/' . $data['file'];
    updateMoviePage($path, $id, $data['title'], 'anime');
    flush();
}

echo "<h2>🎬 Updating Movie Pages</h2>";
foreach ($movies as $id => $data) {
    $path = __DIR__ . '/revs/movie_rev/' . $data['file'];
    updateMoviePage($path, $id, $data['title'], 'movie');
    flush();
}

echo "<h2>📺 Updating Series Pages</h2>";
foreach ($series as $id => $data) {
    $path = __DIR__ . '/revs/series_rev/' . $data['file'];
    updateMoviePage($path, $id, $data['title'], 'series');
    flush();
}

echo "<h2>🎞️ Updating Short Movie Pages</h2>";
foreach ($short_movies as $id => $data) {
    $path = __DIR__ . '/revs/shortmovies/' . $data['file'];
    updateMoviePage($path, $id, $data['title'], 'short');
    flush();
}

// Summary
echo "<h2>📊 Update Summary</h2>";
echo "<div class='log'>";
echo "<p><strong>Total Files:</strong> " . ($stats['success'] + $stats['failed'] + $stats['skipped']) . "</p>";
echo "<p class='success'><strong>✅ Successfully Updated:</strong> " . $stats['success'] . "</p>";
echo "<p class='warning'><strong>⚠️ Skipped (Already Updated):</strong> " . $stats['skipped'] . "</p>";
echo "<p class='error'><strong>❌ Failed:</strong> " . $stats['failed'] . "</p>";
echo "</div>";

echo "<h2>🎉 All Files Processed!</h2>";
echo "<div class='log'>";
echo "<p><strong>Next Steps:</strong></p>";
echo "<ol>";
echo "<li>Run <code>database/schema.sql</code> in phpMyAdmin to create the required tables</li>";
echo "<li>Test the review system on a few pages</li>";
echo "<li>Verify that login/authentication works properly</li>";
echo "<li>Test watchlist and watched features</li>";
echo "</ol>";
echo "<p><a href='revs/anime_rev/asilentvoice.php' style='background:#007bff;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;display:inline-block;margin-top:10px;'>Test Example Page</a></p>";
echo "</div>";

echo "</body></html>";
?>
