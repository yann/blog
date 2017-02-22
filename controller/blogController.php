<?php
/**
 * author: yangyue
 * time: 17-1-23 上午10:52
 * description:
 */
namespace controller;
use com\baseController;
use com\sql\MysqlBase;
use model\blogModel;
class blogController extends baseController{
    public function index(){
        $blogModele = new blogModel();
        $results = $blogModele->getIndex();
        $pages = $blogModele->getPages();
        $this->assign('pages',$pages);
        $this->assign('articles',$results);
        $this->display('blog/index.html');
    }

    public function article(){
        $id = $_GET['id'];
        $blogModele = new blogModel();
        $results = $blogModele->getArticleById($id);
        $this->assign('articles',$results);
        $this->display('blog/article.html');
    }
    public function getList(){
        $blogModele = new blogModel();
        $results = $blogModele->getList();
        echo json_encode($results);
    }
}