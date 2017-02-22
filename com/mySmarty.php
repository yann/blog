<?php
/**
 * author: yangyue
 * time: 17-1-20 下午1:24
 * description:
 */
namespace com;

require_once '../libs/smarty/Smarty.class.php';
class mySmarty extends \Smarty {
    public function __construct(array $options = array()){
        parent::__construct($options);
        $this->debugging = false;  //开启debug模式
        $this->caching = false; //开启缓存
        //$this->cache_lifetime = 120;   //缓存时间
        $this->left_delimiter = '<{';  //左定界符
        $this->right_delimiter = '}>'; //右定界符
        $this->setTemplateDir(ROOT.'/view/');    //视图目录
        $this->setCompileDir(ROOT. '/temp/compile/'); //编译目录
        $this->setConfigDir(ROOT . '/temp/configs/');  //配置目录
        $this->setCacheDir(ROOT . '/temp/cache/'); //缓存目录
    }
}