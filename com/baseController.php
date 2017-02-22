<?php
/**
 * author: yangyue
 * time: 17-1-19 上午11:20
 * description:
 */
namespace com;
use com\mySmarty;

class baseController extends mySmarty {
    function index(){
        return "Controller";
    }
    function __call($name, $arguments){
        exit("function ".$name." doesn't exist.");
    }
    }

