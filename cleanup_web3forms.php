<?php
/**
 * Cleanup Script - Remove Remaining Web3Forms Code
 * This script removes any leftover Web3Forms code from all pages
 */

// Set longer execution time
set_time_limit(300);

echo "<!DOCTYPE html><html><head><title>Cleanup Web3Forms</title>";
echo "<style>body{font-family:Arial,sans-serif;padding:20px;background:#f5f5f5;}";
echo ".success{color:green;}.error{color:red;}.warning{color:orange;}";
echo ".log{background:white;padding:15px;border-radius:5px;margin:10px 0;}";
echo "h2{color:#333;border-bottom:2px solid #007bff;padding-bottom:10px;}";
echo "</style></head><body>";
echo "<h1>🧹 Cleanup Script - Removing Web3Forms Remnants</h1>";

$stats = ['cleaned' => 0, 'skipped' => 0, 'errors' => 0];

function cleanWebForms($filePath) {
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
    
    // Pattern 1: Remove standalone Web3Forms form
    $pattern1 = '/<form action="https:\/\/api\.web3forms\.com\/submit".*?<\/form>/s';
    if (preg_match($pattern1, $content)) {
        $content = preg_replace($pattern1, '', $content);
        echo "✓ Removed Web3Forms form<br>";
    }
    
    // Pattern 2: Remove orphaned closing divs and scripts after renderReviewSection
    $pattern2 = '/\?>\s*<\/div>\s*<\/div>\s*<\/div>\s*<script>\s*const submitButton.*?<\/script>\s*<\/div>/s';
    if (preg_match($pattern2, $content)) {
        $content = preg_replace($pattern2, '?>', $content);
        echo "✓ Removed orphaned closing tags and scripts<br>";
    }
    
    // Pattern 3: Remove any remaining web3forms script references
    $content = preg_replace('/<script src="https:\/\/web3forms\.com\/client\/script\.js".*?<\/script>/s', '', $content);
    
    // Pattern 4: Remove captcha divs
    $content = preg_replace('/<div class="h-captcha capecha".*?<\/div>/s', '', $content);
    
    // Pattern 5: Clean up multiple consecutive spaces/divs
    $content = preg_replace('/\n\s*\n\s*\n/', "\n\n", $content);
    
    // Check if anything changed
    if ($content === $original_content) {
        echo "<span class='warning'>⚠️ No Web3Forms code found (already clean)</span></div>";
        $stats['skipped']++;
        return true;
    }
    
    // Save the cleaned content
    if (file_put_contents($filePath, $content)) {
        echo "<span class='success'>✅ Successfully cleaned!</span></div>";
        $stats['cleaned']++;
        flush();
        return true;
    } else {
        echo "<span class='error'>❌ Failed to save!</span></div>";
        $stats['errors']++;
        return false;
    }
}

// Get all PHP files in all review directories
$directories = [
    'anime_rev' => __DIR__ . '/revs/anime_rev/',
    'movie_rev' => __DIR__ . '/revs/movie_rev/',
    'series_rev' => __DIR__ . '/revs/series_rev/',
    'shortmovies' => __DIR__ . '/revs/shortmovies/'
];

foreach ($directories as $type => $dir) {
    echo "<h2>📁 Cleaning $type</h2>";
    
    if (!is_dir($dir)) {
        echo "<div class='log'><span class='error'>❌ Directory not found: $dir</span></div>";
        continue;
    }
    
    $files = glob($dir . '*.php');
    
    foreach ($files as $file) {
        cleanWebForms($file);
        flush();
    }
}

// Summary
echo "<h2>📊 Cleanup Summary</h2>";
echo "<div class='log'>";
echo "<p><strong>Total Files Processed:</strong> " . ($stats['cleaned'] + $stats['skipped'] + $stats['errors']) . "</p>";
echo "<p class='success'><strong>✅ Files Cleaned:</strong> " . $stats['cleaned'] . "</p>";
echo "<p class='warning'><strong>⚠️ Already Clean:</strong> " . $stats['skipped'] . "</p>";
echo "<p class='error'><strong>❌ Errors:</strong> " . $stats['errors'] . "</p>";
echo "</div>";

echo "<h2>✨ Cleanup Complete!</h2>";
echo "<div class='log'>";
echo "<p>All Web3Forms code has been removed from your pages.</p>";
echo "<p><a href='revs/anime_rev/attackontitan.php' style='background:#007bff;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;display:inline-block;margin-top:10px;'>Test Attack On Titan Page</a></p>";
echo "</div>";

echo "</body></html>";
?>
