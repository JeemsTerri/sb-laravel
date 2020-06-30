<?php


// spl_autoload_register(fn($class) => require_once __DIR__ . '/Classes/'. $class . '.php');
spl_autoload_register(function ($class)
{
    require_once __DIR__ . '/Classes/'. $class . '.php';
});