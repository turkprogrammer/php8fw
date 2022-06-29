<?php

namespace php8fw;

use RedBeanPHP\R;
use RedBeanPHP\RedException;

class Db
{
    use TSingleton;

    /**
     * @throws RedException
     * @throws \Exception
     */
    private function __construct()
    {
        $db = require_once CONFIG . '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
        if (!R::testConnection()) {
            throw new \Exception('No connection to DB', 500);
        }
        R::freeze(true);
        if (DEBUG) {
            R::debug(true, 3);
        }
    }
}