<?php
/**
 * author: yangyue
 * time: 17-2-7 下午2:59
 * description:
 */
namespace controller;
use com\checkController;
use com\baseController;

class adminController extends checkController{
    public function index(){
        $this->display('admin/index.html');
    }
}