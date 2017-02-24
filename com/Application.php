<?php
/**
 * author: yangyue
 * time: 17-1-18 下午7:09
 * description:
 */
use com\Request;
    class Application{
        private $request;
        private $controller;
        private $action;
        public function run(){
            $request = new Request($_GET);
            $this->request = $request->run();
            $this->router();
        }
        public function router(){

            if (isset($_SERVER['argv']) and count($_SERVER['argv'])>1)
            {
                $this->controller = $_SERVER['argv'][1];
                if (isset($_SERVER['argv'][2]))
                $this->action= $_SERVER['argv'][2];
            }
            else{

                if (isset($this->request['controller'])) {
                    $this->controller = $this->request['controller'];
                }
                if (isset($this->request['action'])){
                    $this->action = $this->request['action'];
                }
            }
               if (empty($this->controller)) {
                   $controllerName = 'index';
               }else{
                   $controllerName = $this->controller;
               }
               if (empty($this->action)){
                   $actionName = 'index';
               }else{
                   $actionName = $this->action;
               }
                $controllerPath =  'controller\\'.$controllerName.'Controller';
                $realpath = ROOT.'/controller/'.$controllerName.'Controller.php';
                if (file_exists($realpath)){
                    $controller = new $controllerPath();
                    call_user_func_array(array($controller,$actionName),array());
                }
                else{
                    header("refresh:2;url=/");
                   include_once "../html/404.html";
                }

        }
    }