<?php
/**
 * author: yangyue
 * time: 17-1-26 下午6:23
 * description:
 */
namespace controller;
use com\baseController;
use com\sql\MysqlBase;
use model\adminModel;
class loginController extends baseController{
    public function index(){
        $token = md5(time());
        $_SESSION['token'] = $token;
        $this->assign('token',$token);
        $this->display('login/index.html');
    }
    public function check(){

       if (!isset($_POST['token']) and $_POST['token'] != $_SESSION['token'])
       {
            echo 'no csrf!';
            exit;
       }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5_username = md5($username);
        $md5_password = md5($password);
        $model = new adminModel();
        $flag =  $model->check($md5_username,$md5_password);
       if ($flag){
           $_SESSION['admin'] = md5($username.$password);
           header('Location: /admin');
       }
       else{
           header('Location: /login');
       }
    }
}