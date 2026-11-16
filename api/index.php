<?php

use Illuminate\Http\Request;

// api/index.php
require __DIR__ . '/../public/index.php';

define('LARAVEL_START', microtime(true));

// Load Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle incoming request
$app->handleRequest(Request::capture());
