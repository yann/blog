<?php
/**
 * author: yangyue
 * time: 17-1-19 下午1:26
 * description:
 */
namespace com\sql;
use com\sql\PDOBase;
    class MysqlBase extends PDOBase {
        public $password;
        public $username;
        public $type;
        public $host;
        public $dbname;
        public function __construct($dbname ='')
        {
            $this->host = '121.42.56.179';
            $this->username = '';
            $this->password = '';
            $this->type = 'mysql';
            if (!empty($dbname)) {
                $this->dbname = $dbname;
            }else{
                $this->dbname = 'blog';
            }

            parent::__construct();
        }
    }
