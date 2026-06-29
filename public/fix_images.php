<?php
/**
 * EMERGENCY FIX SCRIPT FOR MADELIA DESIGNS
 * =========================================
 * Upload this file to your public/ folder on Hostinger
 * Then visit: https://madeliadesigns.com/fix_images.php
 * DELETE THIS FILE AFTER RUNNING IT!
 */

echo "<h1>Madelia Designs - Emergency Fix Script</h1>";
echo "<pre>";

// 1. Fix all blade files
echo "=== Step 1: Fixing Blade Template Image Paths ===\n";

$bladeDir = __DIR__ . '/../resources/views/frontend';
if (!is_dir($bladeDir)) {
    $bladeDir = dirname(__DIR__) . '/resources/views/frontend';
}

$replacements = [
    'https://madeliadesigns.com/images/categories/' => '/assets/images/',
    'https://madeliadesigns.com/images/products/' => '/assets/images/',
    'https://madeliadesigns.com/images/brands/' => '/assets/images/',
    '/images/categories/' => '/assets/images/',
    '/images/products/' => '/assets/images/',
    '/images/brands/' => '/assets/images/',
];

if (is_dir($bladeDir)) {
    $bladeFiles = glob($bladeDir . '/*.blade.php');
    echo "Found " . count($bladeFiles) . " blade files\n";
    
    foreach ($bladeFiles as $file) {
        $content = file_get_contents($file);
        $original = $content;
        
        foreach ($replacements as $old => $new) {
            $content = str_replace($old, $new, $content);
        }
        
        if ($content !== $original) {
            file_put_contents($file, $content);
            echo "  FIXED: " . basename($file) . "\n";
        } else {
            echo "  OK: " . basename($file) . "\n";
        }
    }
} else {
    echo "  ERROR: Blade directory not found at: $bladeDir\n";
}

// 2. Fix database
echo "\n=== Step 2: Fixing Database Image Paths ===\n";

$dbPath = __DIR__ . '/../database/database.sqlite';
if (!file_exists($dbPath)) {
    $dbPath = dirname(__DIR__) . '/database/database.sqlite';
}

if (file_exists($dbPath)) {
    try {
        $db = new PDO("sqlite:$dbPath");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Fix all image paths
        $queries = [
            "UPDATE products SET image_path = REPLACE(image_path, 'https://madeliadesigns.com/images/categories/', '/assets/images/')",
            "UPDATE products SET image_path = REPLACE(image_path, 'https://madeliadesigns.com/images/products/', '/assets/images/')",
            "UPDATE products SET image_path = REPLACE(image_path, 'https://madeliadesigns.com/images/brands/', '/assets/images/')",
            "UPDATE products SET image_path = REPLACE(image_path, '/images/products/', '/assets/images/')",
            "UPDATE products SET image_path = REPLACE(image_path, '/images/categories/', '/assets/images/')",
            "UPDATE products SET gallery_images = REPLACE(gallery_images, 'https://madeliadesigns.com/images/categories/', '/assets/images/')",
            "UPDATE products SET gallery_images = REPLACE(gallery_images, 'https://madeliadesigns.com/images/products/', '/assets/images/')",
            "UPDATE products SET gallery_images = REPLACE(gallery_images, '/images/products/', '/assets/images/')",
            "UPDATE products SET gallery_images = REPLACE(gallery_images, '/images/categories/', '/assets/images/')",
        ];
        
        foreach ($queries as $sql) {
            $stmt = $db->exec($sql);
            echo "  Executed: " . substr($sql, 0, 80) . "...\n";
        }
        
        // Show sample
        $stmt = $db->query("SELECT id, name, image_path FROM products LIMIT 3");
        echo "\n  Sample products:\n";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "    ID:{$row['id']} | {$row['name']} | {$row['image_path']}\n";
        }
        
    } catch (Exception $e) {
        echo "  ERROR: " . $e->getMessage() . "\n";
    }
} else {
    echo "  ERROR: Database not found!\n";
}

// 3. Clear view cache
echo "\n=== Step 3: Clearing View Cache ===\n";
$viewCacheDir = __DIR__ . '/../storage/framework/views';
if (!is_dir($viewCacheDir)) {
    $viewCacheDir = dirname(__DIR__) . '/storage/framework/views';
}

if (is_dir($viewCacheDir)) {
    $cachedViews = glob($viewCacheDir . '/*.php');
    foreach ($cachedViews as $view) {
        unlink($view);
    }
    echo "  Cleared " . count($cachedViews) . " cached views\n";
}

// 4. Check assets/images
echo "\n=== Step 4: Checking Assets ===\n";
$assetsDir = __DIR__ . '/assets/images';
if (is_dir($assetsDir)) {
    $images = glob($assetsDir . '/*.*');
    echo "  Found " . count($images) . " images in /assets/images/\n";
} else {
    echo "  ERROR: /assets/images/ NOT FOUND!\n";
}

echo "\n\n========================================\n";
echo "ALL FIXES APPLIED SUCCESSFULLY!\n";
echo "========================================\n";
echo "Please refresh your website now.\n";
echo "IMPORTANT: DELETE this fix_images.php file!\n";
echo "</pre>";
?>
