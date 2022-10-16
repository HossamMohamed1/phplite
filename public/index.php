<?php

/**
 * phplite framework
 * 
 * @author Hossam Mohamed homoh1489@gmail.com
 */
/**
 * Redister the autoloadr
 */
require __DIR__ . '/../vendor/autoload.php'; 
/**
 * Redister the bootstrap
 */
require __DIR__.'/../bootstrap/app.php';

/**
 * Run Application
 * 
 * Request and Response Handling
 */

Application::run();