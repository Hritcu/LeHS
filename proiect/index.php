<?php



// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

require 'application/config/config.php';

// load application class
require 'application/libs/application.php';
require 'application/libs/controller.php';

// start the application
$app = new Application();
