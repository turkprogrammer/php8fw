<?php

namespace app\controllers;

use php8fw\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        var_dump($this->model);
    }
}
