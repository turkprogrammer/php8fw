<?php

namespace php8fw;

class Registry
{
    use TSingleton;

    /**
     * @var array
     * контейнер
     */
    protected static array $properties = [];

    /**
     * @param $name
     * @param $value
     * @return void
     * записываем данные в контейнер
     */
    public static function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed|null
     *
     * получаем данные по ключу
     */
    public static function getProperty($name): mixed
    {
        return self::$properties[$name] ?? null;
    }

    /**
     * @return array
     *
     * отладочный метод
     */
    public function getProperties(): array
    {
        return self::$properties;
    }


}