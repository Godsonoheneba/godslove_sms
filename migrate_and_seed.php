<?php
// migrate_and_seed.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../school_laravel/vendor/autoload.php';
$app = require_once __DIR__ . '/../school_laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Run migrations
$exitCode = $kernel->call('migrate', ['--force' => true]);
echo "Migrations completed with exit code: " . $exitCode . "<br>";

// Run seeders
$exitCode = $kernel->call('db:seed', ['--force' => true]);
echo "Seeding completed with exit code: " . $exitCode;
?>
