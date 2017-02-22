<?php
/**
 * author: yangyue
 * time: 17-1-18 下午6:47
 * description:
 */
session_start();
define('ROOT',dirname(dirname(__FILE__)));
require_once ROOT.'/corn/Autoload.php';
require_once ROOT.'/com/Application.php';
$app = new Application();
$app->run();


