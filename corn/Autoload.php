<?php
/**
 * author: PhpStorm.
 * time: 17-1-18 下午7:42
 * description:
 */
spl_autoload_register(function ($class) {
   $class =  str_replace('\\','/',$class);
    if (file_exists(ROOT.'/'.$class.'.php')) {
        include ROOT . '/' . $class . '.php';
    }
});