<?php
echo "✅ Git deployment from D drive is working!<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current time: " . date('Y-m-d H:i:s') . "<br>";
echo "File location: " . __FILE__ . "<br>";

// Check if Laravel files exist
$files = [
    '../vendor/autoload.php' => 'Vendor Autoload',
    '../bootstrap/app.php' => 'Bootstrap App', 
    '../app/Http/Kernel.php' => 'HTTP Kernel',
    '../composer.json' => 'Composer Config'
];

foreach ($files as $file => $description) {
    if (file_exists($file)) {
        echo "✅ $description: EXISTS<br>";
    } else {
        echo "❌ $description: MISSING<br>";
    }
}

echo "<h3>All files in public folder:</h3>";
$public_files = scandir(__DIR__);
foreach ($public_files as $file) {
    if ($file != '.' && $file != '..') {
        echo "📄 $file<br>";
    }
}
?>