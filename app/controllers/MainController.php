<?php

namespace app\controllers;

use php8fw\Controller;

class MainController extends Controller
{
    /**
     * @var string
     */
    //public string $layout = 'test2';

    public function indexAction()
    {
        $this->setMeta('Homepage', 'Description', 'Keyword');
     /*   $this->set(
            [
                'test' => 'TESTING'
            ]
        )*/;

        $names = ['Robert', 'John', 'Mary'];
        //$this->set(['names' => $names]);
        $this->set(compact('names'));
    }
}
