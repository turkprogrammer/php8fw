<?php

/**
 * режим работы приложения
 */
define('DEBUG', 1);
/**
 * корень приложения
 */
define('ROOT', dirname(__DIR__));
/**
 * путь к публичной папке
 */
define('WWW', ROOT.'/public');
/**
 * путь к приложению
 */
define('APP', ROOT.'/app');
/**
 * путь к ядру
 */
define('CORE', ROOT.'/vendor/php8fw');
/**
 * путь к helpers
 */
define('HELPERS', ROOT.'/vendor/php8fw/helpers');
/**
 * путь к cache
 */
define('CACHE', ROOT.'/tmp/cache');
/**
 * путь к logs
 */
define('LOGS', ROOT.'/tmp/logs');
/**
 * путь к configs
 */
define('CONFIG', ROOT.'/config');
/**
 * путь к templates
 */
define('LAYOUTS', 'templates');
/**
 * путь к главной странице admin
 */
define('ADMIN', '/admin');
/**
 * путь к no image
 */
define('NO_IMAGE', '/uploads/no_image.png');

define("PATH", '/');

require_once ROOT.'/vendor/autoload.php';
