<?php
echo "<h1>🔄 Testing Meri Zindgi Website</h1>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Time: " . date('Y-m-d H:i:s') . "<br>";

// Check critical files
$critical_files = [
    '../vendor/autoload.php' => 'Vendor Autoload',
    '../bootstrap/app.php' => 'Bootstrap File',
    '../app/Http/Kernel.php' => 'Kernel File'
];

foreach ($critical_files as $file => $desc) {
    echo (file_exists($file) ? "✅" : "❌") . " $desc<br>";
}

// Test if we can load Laravel
if (file_exists('../vendor/autoload.php')) {
    try {
        require_once '../vendor/autoload.php';
        echo "✅ Vendor autoload loaded successfully<br>";
    } catch (Exception $e) {
        echo "❌ Error loading vendor: " . $e->getMessage() . "<br>";
    }
}

echo "<hr><h3>Next steps:</h3>";
echo "1. If you see ✅ for vendor autoload, Laravel is working<br>";
echo "2. If you see ❌, we need to add missing files to GitHub";
?>