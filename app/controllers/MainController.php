<?php

namespace app\controllers;

use app\models\Main;
use php8fw\Controller;
use RedBeanPHP\R;

/** @property Main $main */
class MainController extends Controller
{
    /**
     * @var string
     */
    //public string $layout = 'test2';

    public function indexAction()
    {
        $this->setMeta('Homepage', 'Description', 'Keyword');
        $names = $this->model->getNames();
        $oneName = R::getRow( 'SELECT * FROM authors WHERE id = 2');
        $this->set(compact('names'));
    }
}
