<?php

namespace php8fw;

class Model
{
    /**
     * @var array
     *
     * свойство неоходимо для автозаполнения модели данными
     */
    public array $attributes = [];
    /**
     * @var array
     *
     * собираем ошибки при валидации данных
     */
    public array $errors = [];
    /**
     * @var array
     *
     * массив правил валидации
     */
    public array $rules = [];
    /**
     * @var array
     *
     * массив полей не прошедших валидацию
     */
    public array $labels = [];

    /**
     * получаем обьект подключения к бд
     */
    public function __construct()
    {
        Db::getInstance();
    }
}