<?php

namespace php8fw;

class App
{
    public static $app;

    /**
     * инициализируем приложение
     */
    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
    }

    /**
     * @return void
     * берем параметры приложения и сохраняем все в контейнер
     */
    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}