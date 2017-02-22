<?php
/**
 * author: yangyue
 * time: 17-2-21 下午7:35
 * description:
 */
namespace controller;
use com\baseController;
class aboutController extends  baseController {
    public function index() {
        $this->display('about/index.html');
    }
}