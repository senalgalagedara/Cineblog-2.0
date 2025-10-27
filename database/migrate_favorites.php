<?php
/**
 * Migration script to add favorites and bio support to user_sign table
 * Run this file once to update your existing database
 */

require_once __DIR__ . '/../config/config.php';

try {
    $db = (new config())->connect();
    
    echo "<h2>Starting Favorites Migration...</h2>";
    
    // Check if columns already exist
    $checkQuery = "SHOW COLUMNS FROM user_sign LIKE 'bio'";
    $stmt = $db->query($checkQuery);
    
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: orange;'>⚠ Bio and favorites columns already exist. Skipping migration.</p>";
        exit;
    }
    
    // Add bio and favorites columns to user_sign table
    echo "<p>Adding new columns to user_sign table...</p>";
    
    $alterQuery = "ALTER TABLE user_sign 
                   ADD COLUMN bio TEXT NULL AFTER avatar_size,
                   ADD COLUMN favorite_actor VARCHAR(255) NULL AFTER bio,
                   ADD COLUMN favorite_actress VARCHAR(255) NULL AFTER favorite_actor,
                   ADD COLUMN favorite_director VARCHAR(255) NULL AFTER favorite_actress,
                   ADD COLUMN top5_movies JSON NULL AFTER favorite_director";
    
    $db->exec($alterQuery);
    
    echo "<p style='color: green;'>✓ Successfully added bio and favorites columns to user_sign table</p>";
    echo "<h3>Migration completed successfully!</h3>";
    echo "<p>New columns added:</p>";
    echo "<ul>";
    echo "<li>bio (TEXT) - User biography</li>";
    echo "<li>favorite_actor (VARCHAR) - Favorite actor name</li>";
    echo "<li>favorite_actress (VARCHAR) - Favorite actress name</li>";
    echo "<li>favorite_director (VARCHAR) - Favorite director name</li>";
    echo "<li>top5_movies (JSON) - Top 5 favorite movies with titles and posters</li>";
    echo "</ul>";
    echo "<p><a href='../user/user_account.php'>Go to Profile Page</a></p>";
    
} catch (PDOException $e) {
    echo "<p style='color: red;'>✗ Migration failed: " . $e->getMessage() . "</p>";
    echo "<p>If you see 'Column already exists', the migration has already been run.</p>";
    exit(1);
}
