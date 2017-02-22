<?php
/**
 * author: yangyue
 * time: 17-2-7 下午3:01
 * description:
 */
namespace com;
use com\baseController;
 class checkController extends baseController{
     public function __construct(array $options = array()){
            parent::__construct($options);
            if (empty($_SESSION['admin'])or$_SESSION['admin']!='02818c9accd5ba29411e885d99f38381')
            {
                header('Location: /login');
            }
        }
    }
