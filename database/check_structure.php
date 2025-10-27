<?php
/**
 * Database structure verification script
 * Checks if all required tables and columns exist
 */

require_once __DIR__ . '/../config/config.php';

echo "<h1>Database Structure Check</h1>";
echo "<style>
    body { font-family: Arial; padding: 20px; }
    .pass { color: green; }
    .fail { color: red; }
    .warn { color: orange; }
    table { border-collapse: collapse; margin: 10px 0; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    th { background: #f2f2f2; }
</style>";

try {
    $db = (new config())->connect();
    echo "<p class='pass'>✓ Database connection successful</p>";
    
    // Check tables
    $tables = ['user_sign', 'reviews', 'watchlist', 'watched'];
    echo "<h2>Table Check</h2><table>";
    echo "<tr><th>Table</th><th>Status</th><th>Row Count</th></tr>";
    
    foreach ($tables as $table) {
        try {
            $stmt = $db->query("SELECT COUNT(*) as count FROM $table");
            $count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
            echo "<tr><td>$table</td><td class='pass'>✓ EXISTS</td><td>$count rows</td></tr>";
        } catch (PDOException $e) {
            echo "<tr><td>$table</td><td class='fail'>✗ MISSING</td><td>N/A</td></tr>";
        }
    }
    echo "</table>";
    
    // Check user_sign columns
    echo "<h2>user_sign Table Columns</h2>";
    $requiredColumns = ['userid', 'username', 'useremail', 'password', 'avatar', 'avatar_mime', 'avatar_size', 'bio', 'favorite_actor', 'favorite_actress', 'favorite_director', 'top5_movies'];
    
    $stmt = $db->query("SHOW COLUMNS FROM user_sign");
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
    foreach ($columns as $col) {
        $isRequired = in_array($col['Field'], $requiredColumns);
        $class = $isRequired ? 'pass' : '';
        echo "<tr class='$class'><td>" . $col['Field'] . "</td><td>" . $col['Type'] . "</td><td>" . $col['Null'] . "</td><td>" . $col['Key'] . "</td></tr>";
    }
    echo "</table>";
    
    // Check if avatar columns exist
    $avatarExists = false;
    foreach ($columns as $col) {
        if ($col['Field'] === 'avatar') {
            $avatarExists = true;
            break;
        }
    }
    
    if ($avatarExists) {
        echo "<p class='pass'>✓ Avatar columns are present</p>";
    } else {
        echo "<p class='fail'>✗ Avatar columns are MISSING - Run migrate_avatar.php</p>";
        echo "<p><a href='migrate_avatar.php'>Click here to run avatar migration</a></p>";
    }
    
    // Check if favorites columns exist
    $bioExists = false;
    foreach ($columns as $col) {
        if ($col['Field'] === 'bio') {
            $bioExists = true;
            break;
        }
    }
    
    if ($bioExists) {
        echo "<p class='pass'>✓ Bio and favorites columns are present</p>";
    } else {
        echo "<p class='fail'>✗ Bio and favorites columns are MISSING - Run migrate_favorites.php</p>";
        echo "<p><a href='migrate_favorites.php'>Click here to run favorites migration</a></p>";
    }
    
    // Check reviews table columns
    echo "<h2>reviews Table Columns</h2>";
    try {
        $stmt = $db->query("SHOW COLUMNS FROM reviews");
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
        foreach ($columns as $col) {
            echo "<tr><td>" . $col['Field'] . "</td><td>" . $col['Type'] . "</td><td>" . $col['Null'] . "</td><td>" . $col['Key'] . "</td></tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "<p class='fail'>✗ reviews table not found</p>";
    }
    
    // Check watched table columns
    echo "<h2>watched Table Columns</h2>";
    try {
        $stmt = $db->query("SHOW COLUMNS FROM watched");
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
        foreach ($columns as $col) {
            echo "<tr><td>" . $col['Field'] . "</td><td>" . $col['Type'] . "</td><td>" . $col['Null'] . "</td><td>" . $col['Key'] . "</td></tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "<p class='fail'>✗ watched table not found</p>";
    }
    
    echo "<h2>Summary</h2>";
    echo "<p>If any tables or columns are missing, run the schema.sql file in phpMyAdmin.</p>";
    echo "<p>If only avatar columns are missing, run <strong>migrate_avatar.php</strong></p>";
    
} catch (PDOException $e) {
    echo "<p class='fail'>✗ Database connection failed: " . $e->getMessage() . "</p>";
}
?>
