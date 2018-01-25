<?php


/**
 * load composer for autoloading
 */
require __DIR__ . '/../bootstrap/autoload.php';

/**
 * bootstrap app
 */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// run the whole application
$app->run();

