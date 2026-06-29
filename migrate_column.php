<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

// If we are using sqlite, changing column type requires some extra steps or we can just alter it with raw SQL if needed,
// but let's try the Laravel way first if doctrine/dbal is installed. 
// Wait, sqlite doesn't strictly enforce length limits on text columns anyway! 
// Ah! If it's SQLite, TEXT can hold up to 1 billion bytes.
// What database is this using? Let's check config.
$config = config('database.default');
echo "Database driver: " . $config . "\n";

if ($config === 'mysql') {
    DB::statement("ALTER TABLE site_settings MODIFY value LONGTEXT");
    echo "Column changed to LONGTEXT successfully.\n";
} else {
    echo "Not MySQL, no length limit on TEXT for SQLite/Postgres.\n";
}
