<?php
require 'vendor/autoload.php';
\ = require_once 'bootstrap/app.php';
\ = \->make(Illuminate\Contracts\Console\Kernel::class);
\->bootstrap();

\ = \Illuminate\Support\Facades\Schema::getColumnListing('sub_categories');
if (empty(\)) {
    \ = \Illuminate\Support\Facades\Schema::getColumnListing('subcategories');
}
echo implode(', ', \);
