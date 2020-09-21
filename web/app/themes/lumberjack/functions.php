<?php

use App\Http\Lumberjack;

// Create the Application Container
$app = require_once('bootstrap/app.php');

// Bootstrap Lumberjack from the Container
$lumberjack = $app->make(Lumberjack::class);
$lumberjack->bootstrap();

// Import our routes file
require_once('routes.php');

require_once('acf/index.php');

// Set global params in the Timber context
add_filter('timber_context', [$lumberjack, 'addToContext']);
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('lumberjack/main.css', get_template_directory_uri() . '/dist/styles/main.css', false, null);
    wp_enqueue_script('lumberjack/main.js', get_template_directory_uri() . '/dist/scripts/main.js', ['jquery'], null, true);
}, 100);

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('lumberjack/customizer.js', get_template_directory_uri() . '/dist/scripts/customizer.js', ['customize-preview'], null, true);
});
