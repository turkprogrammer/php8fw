<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необхадима версия PHP >= 8');
}
/*
 * подключаем конфигурацию
 */
require_once dirname(__DIR__) . '/config/init.php';

/*
 * создаем экземпляр App
 */
new \php8fw\App();

//throw new Exception('Error loading');
throw new Exception('Error loading', 404);
//echo $ter ;

