<?php

namespace app\controllers;

use app\models\Main;
use php8fw\Controller;

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
        $this->set(compact('names'));
    }
}
