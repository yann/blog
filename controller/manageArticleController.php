<?php
/**
 * author: yangyue
 * time: 17-2-8 下午12:34
 * description:
 */

namespace controller;
use com\checkController;
use com\baseController;
use model\blogModel;
use model\categoryModel;

class manageArticleController extends checkController{


    public function add(){
        $categorymodel = new categoryModel();
        $category = $categorymodel->getCategoryName();
        $this->assign('category',$category);
        $this->display('manageArticle/add.html');
    }

    public function doadd(){
        $model = new blogModel();
        $data = $_POST;
        $result = $model->insert_article($data);
        if ($result){

            header("refresh:2;url=/manageArticle/add");
            print('新增成功...<br>两秒后自动跳转~~~');
            // $this->display('manageArticle/doadd');
        }else{
            header("refresh:2;url=/manageArticle/add");
            print('新增失败...<br>两秒后自动跳转~~~');
        }
    }
    public function uploadImg(){
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);     // 获取文件后缀名

        if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/x-png")
                || ($_FILES["file"]["type"] == "image/png"))
            && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
            && in_array($extension, $allowedExts))
        {
            if ($_FILES["file"]["error"] > 0)
            {
                echo "错误：: " . $_FILES["file"]["error"] . "<br>";
            }
            else
            {
                // 判断当期目录下的 temp 目录是否存在该文件
                // 如果没有 temp 目录，需要创建它，temp 目录权限为 777
                if (file_exists("var/www/html/blog/html/temp/" . $_FILES["file"]["name"]))
                {
                    echo $_FILES["file"]["name"] . " 文件已经存在。 ";
                }
                else
                {

                    // 如果 temp 目录不存在该文件则将文件上传到 upload 目录下

                    $new = "/var/www/html/blog/html/temp/" . $_FILES["file"]["name"];
                    move_uploaded_file($_FILES["file"]["tmp_name"],$new);
                    // move_uploaded_file($_FILES["file"]["tmp_name"]. $_FILES["file"]["name"], "/temp/" . $_FILES["file"]["name"]);
                    //echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
                    echo json_encode(array (
                        'code' => '0',
                        'msg' => '',
                        'data' =>
                            array (
                                'src' =>  "/temp/" . $_FILES["file"]["name"],
                                'title' => $_FILES["file"]["name"],
                            ),
                    ));
                }

            }
        }

    }

    public function delete(){
        $blogModele = new blogModel();
        $pages = $blogModele->getPages();
        $this->assign('pages',$pages);
        $this->display('manageArticle/delete.html');
    }
    public function dodelete(){
        $id = $_GET['id'];
        $blogModele = new blogModel();
        $result = $blogModele->deleteById($id);
        if ($result){

            header("refresh:2;url=/manageArticle/delete");
            print('删除成功...<br>两秒后自动跳转~~~');
            // $this->display('manageArticle/doadd');
        }else{
            header("refresh:2;url=/manageArticle/delete");
            print('删除失败...<br>两秒后自动跳转~~~');
        }
    }

    public function edit(){
        $blogModele = new blogModel();
        $pages = $blogModele->getPages();
        $this->assign('pages',$pages);
        $this->display('manageArticle/edit.html');
    }
    public function doedit(){
        $id = $_GET['id'];
        $blogModele = new blogModel();
        $result = $blogModele->getArticleById($id);
        $categorymodel = new categoryModel();
        $category = $categorymodel->getCategoryName();
        $this->assign('category',$category);
        $this->assign('articles',$result);
        $this->display('manageArticle/doedit.html');
    }

    public function update(){
        $data = $_POST;
        $blogModel = new blogModel();
        $result =  $blogModel->updateById($data);
        if ($result){

            header("refresh:2;url=/manageArticle/edit");
            print('更新成功...<br>两秒后自动跳转~~~');
            // $this->display('manageArticle/doadd');
        }else{
            header("refresh:2;url=/manageArticle/edit");
            print('更新失败...<br>两秒后自动跳转~~~');
        }
        //print_r($data);

    }

    public function getList(){
        $blogModele = new blogModel();
        $results = $blogModele->getList();
        echo json_encode($results);
    }



}