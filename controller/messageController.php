<?php
/**
 * author: yangyue
 * time: 17-2-21 下午7:25
 * description:
 */
namespace controller;
use com\baseController;
class messageController extends  baseController {
    public function index() {
        $this->display('message/index.html');
    }
}