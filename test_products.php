<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$products = \App\Models\Product::all();
foreach($products as $p) {
    echo $p->name . ' - ' . $p->image_path . "\n";
}
