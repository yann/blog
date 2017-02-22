<?php
/**
 * author: yangyue
 * time: 17-1-18 下午7:22
 * description:
 */
namespace controller;
use com\baseController;
use com\sql\MysqlBase;
class indexController extends  baseController {

    public function index() {
        $this->assign('title','桎梏的自留地');
        $this->display('index/index.html');
    }
}