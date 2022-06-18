<?php

namespace php8fw;

trait TSingleton
{
    /**
     * @var Registry|TSingleton|null $this |null
     */
    private static ?self $instance = null;

    /**
     * приватный конструктор чтобы не было возмоности создать обьект этого класса
     */
    private function __construct()
    {
    }

    /**
     * @return static
     * создаем обьект через приватный метод
     */
    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}