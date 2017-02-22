<?php
/**
 * author: yangyue
 * time: 17-2-14 下午5:05
 * description:
 */

namespace controller;
use com\checkController;
use com\baseController;

use model\categoryModel;

    class categoryController extends checkController{
            public function manage(){
                $categoryModel = new categoryModel();
                $category = $categoryModel->getCategory();
                $this->assign('categorys',$category);
                $this->display('category/manage.html');
            }
        public function edit(){
            $data = $_GET;
            if (isset($data)){
                $categoryModel = new categoryModel();
                $result = $categoryModel->updateById($data);
                if ($result){
                    header("refresh:2;url=/category/manage");
                    print('修改成功...<br>两秒后自动跳转~~~');
                    // $this->display('manageArticle/doadd');
                }else{
                    header("refresh:2;url=/category/manage");
                    print('修改失败...<br>两秒后自动跳转~~~');
                }
            }else{
                header("refresh:2;url=/category/manage");
                print('暂无数据...<br>两秒后自动跳转~~~');
            }
        }

        public function delete(){
            $id = $_GET['id'];
            $categoryModel = new categoryModel();
            $result = $categoryModel->deleteById($id);
            if ($result){
                header("refresh:2;url=/category/manage");
                print('删除成功...<br>两秒后自动跳转~~~');
                // $this->display('manageArticle/doadd');
            }else{
                header("refresh:2;url=/category/manage");
                print('删除失败...<br>两秒后自动跳转~~~');
            }
        }
        public function add(){
            $this->display('category/add.html');
        }
        public function doadd(){
            $data = $_POST;
            if (isset($data)){
                $categoryModel = new categoryModel();
                $result = $categoryModel->insert_name($data);
                if ($result){

                    header("refresh:2;url=/category/manage");
                    print('新增成功...<br>两秒后自动跳转~~~');
                    // $this->display('manageArticle/doadd');
                }else{
                    header("refresh:2;url=/category/manage");
                    print('新增失败...<br>两秒后自动跳转~~~');
                }

            }else{
                header("refresh:2;url=/category/manage");
                print('暂无数据...<br>两秒后自动跳转~~~');
            }
        }
    }