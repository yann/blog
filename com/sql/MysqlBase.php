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
            $this->host = 'localhost';
            $this->username = 'yann';
            $this->password = 'YYOO00OO00';
            $this->type = 'mysql';
            if (!empty($dbname)) {
                $this->dbname = $dbname;
            }else{
                $this->dbname = 'blog';
            }

            parent::__construct();
        }
    }
