<?php
require 'vendor/autoload.php';
\ = require_once 'bootstrap/app.php';
\ = \->make(Illuminate\Contracts\Console\Kernel::class);
\->bootstrap();

\ = \Illuminate\Support\Facades\Schema::getColumnListing('site_settings');
echo "Columns: " . implode(', ', \) . "\\n";

\ = \Illuminate\Support\Facades\Schema::getColumnType('site_settings', 'value');
echo "Value column type: " . \ . "\\n";
