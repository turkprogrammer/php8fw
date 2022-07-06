<?php

namespace app\models;

use php8fw\Model;
use RedBeanPHP\R;

class Main extends Model
{
    /**
     * @return array
     */
    public function getNames(): array
    {
        return R::findAll('authors');
    }
}