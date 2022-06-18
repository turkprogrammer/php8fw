<?php

namespace php8fw;

use Throwable;

class ErrorHandler
{
    /**
     *  https://habr.com/ru/post/161483/
     */
    public function __construct()
    {
        switch (DEBUG) {
            case 0:
                error_reporting(-1);
                break;
            case 1:
                error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
        set_error_handler([$this, 'errorHandler']);
        ob_start();// буферизируем ошибку
        register_shutdown_function([$this, 'fatalErrorHandler']);
    }

    /**
     * @param $errno
     * @param $errstr
     * @param $errfile
     * @param $errline
     * @return void
     */
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logError($errstr, $errfile, $errline);
        $this->displayError($errno, $errstr, $errfile, $errline);
    }

    /**
     * @return void
     */
    public function fatalErrorHandler()
    {
        $error = error_get_last();
        if (!empty($error) && $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            $this->logError($error['message'], $error['file'], $error['line']);
            ob_end_clean();
            $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
        } else {
            ob_end_flush();
        }
    }

    /**
     * @param Throwable $e
     * @return void
     */
    public function exceptionHandler(Throwable $e)
    {
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    /**
     * @param string $message
     * @param string $file
     * @param string $line
     * @return void
     */
    protected function logError(string $message = '', string $file = '', string $line = '')
    {
        file_put_contents(
            LOGS . '/errors.log',
            "[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n=================\n",
            FILE_APPEND);
    }

    /**
     * @param $errno
     * @param $errstr
     * @param $errfile
     * @param $errline
     * @param $responce
     * @return void
     */
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 500)
    {
        if ($responce == 0) {
            $responce = 404;
        }
        http_response_code($responce); //отправляем респонз
        if ($responce == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/development.php';
        } else {
            require WWW . '/errors/production.php';
        }
        die;
    }
}