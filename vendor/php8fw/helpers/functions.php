<?php

/**
 * @param $data
 * @param $die
 * @return void
 */
function debug($data, $die = false)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
    if ($die) {
        die;
    }
}

/**
 * @param $str
 * @return string
 */
function html($str)
{
    return htmlspecialchars($str);
}