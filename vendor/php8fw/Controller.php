<?php

namespace php8fw;

abstract class Controller
{
    /**
     * @var array
     * массив данных для вида
     */
    public array $data = [];

    /**
     * @var array|string[]
     */
    public array $meta = [];

    /**
     * @var string
     */
    public string $layout = '';

    /**
     * @var string
     */
    public string $view = '';

    /**
     * @var object
     */
    public object $model;

    public function __construct(public $route = [])
    {

    }

    /**
     * @return void
     */
    public function getModel()
    {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        if (class_exists($model)) {
            $this->model = new $model();
        }
    }

    /**
     * @return void
     */
    public function getView()
    {
        $this->view = $this->view ?: $this->route['action'];

    }

    /**
     * @param $data
     * @return void
     */
    public function set($data)
    {
        $this->data = $data;
    }

    /**
     * @param string $title
     * @param string $description
     * @param string $keywords
     * @return void
     */
    public function setMeta(string $title = '', string $description = '', string $keywords = '')
    {
        $this->meta = [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
        ];
    }
}