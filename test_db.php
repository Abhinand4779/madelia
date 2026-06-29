<?php
require 'vendor/autoload.php';
\ = require_once 'bootstrap/app.php';
\ = \->make(Illuminate\Contracts\Console\Kernel::class);
\->bootstrap();

\ = \App\Models\SiteSetting::where('key', 'hero_sliders')->first();
if (\) {
    echo "HERO_SLIDERS IN DB:\\n";
    echo substr(\->value, 0, 100) . "...\\n";
} else {
    echo "HERO_SLIDERS NOT FOUND IN DB!\\n";
}
