<?php
/**
 * author: yangyue
 * time: 17-1-18 下午7:20
 * description:
 */
namespace com;
    class Request{
        private $request;
        public function __construct($get) {
           $this->request= $get;
        }
        public function run() {
           $result = [];
            if (isset($this->request['controller'])) {
                $result['controller'] = $this->request['controller'];
            }
            if (isset($this->request['action'])) {
                $result['action'] = $this->request['action'];
            }
            return $result;
        }

    }