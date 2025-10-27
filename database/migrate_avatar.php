<?php
/**
 * Migration script to add avatar support to user_sign table
 * Run this file once to update your existing database
 */

require_once __DIR__ . '/../config/config.php';

try {
    $db = (new config())->connect();
    
    echo "Starting migration...\n";
    
    // Check if columns already exist
    $checkQuery = "SHOW COLUMNS FROM user_sign LIKE 'avatar'";
    $stmt = $db->query($checkQuery);
    
    if ($stmt->rowCount() > 0) {
        echo "Avatar columns already exist. Skipping migration.\n";
        exit;
    }
    
    // Add avatar columns to user_sign table
    $alterQuery = "ALTER TABLE user_sign 
                   ADD COLUMN avatar MEDIUMBLOB NULL AFTER cpassword,
                   ADD COLUMN avatar_mime VARCHAR(50) NULL AFTER avatar,
                   ADD COLUMN avatar_size INT NULL AFTER avatar_mime";
    
    $db->exec($alterQuery);
    
    echo "✓ Successfully added avatar columns to user_sign table\n";
    echo "Migration completed successfully!\n";
    
} catch (PDOException $e) {
    echo "Migration failed: " . $e->getMessage() . "\n";
    exit(1);
}
