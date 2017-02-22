<?php
/**
 * author: yangyue
 * time: 17-1-19 下午1:22
 * description:
 */
namespace com\sql;
use \PDO;
class PDOBase{
    public $password;
    public $username;
    public $type;
    public $host;
    public $PDO;
    public $PDOStatement;
    public $dbname;
    public function __construct(){
        $this->PDO = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    public function query(){

        $arr =array();
        $args = func_get_args();
        $str = call_user_func_array(array($this->PDO,'query'),$args);
        foreach ($str as $row) {
            $arr[] = $row;
        }
        return $arr;
    }

    public function exec(){
        $args = func_get_args();
        return call_user_func_array(array($this->PDO,'exec'),$args);
    }

    public function beginTransaction(){
        return call_user_func_array(array($this->PDO,'beginTransaction'),array());
    }

    public function commit(){
        return call_user_func_array(array($this->PDO,'commit'),array());
    }


    public function rollBack(){
        return call_user_func_array(array($this->PDO,'rollBack'),array());
    }

    public function errorCode(){
        return call_user_func_array(array($this->PDO,'errorCode'),array());
    }

    public function lastInsertId(){
        return call_user_func_array(array($this->PDO,'lastInsertId'),array());
    }

    //PDOStatement
    public function prepare(){
        $args = func_get_args();
        $this->PDOStatement = call_user_func_array(array($this->PDO,'prepare'),$args);
        return $this->PDOStatement;
    }


    public function execute(){
        return call_user_func_array(array($this->PDOStatement,'execute'),array());
    }

    public function bindValue(){
        $args = func_get_args();
        return call_user_func_array(array($this->PDOStatement,'bindValue'),$args);
    }
    /**
     * @return  mixed
     * 返回一个包含结果集中所有行的数组
     */
    public function fetchAll(){
        return call_user_func_array(array($this->PDOStatement,'fetchAll'),array());
    }
    /**
     * @return mixed
     * PDO Statement error info
     */
    public function errorInfo(){
        $code = call_user_func_array(array($this->PDOStatement,'errorInfo'),array());
        return implode(',',$code);
    }
    /**
     * @return mixed
     * 返回受上一个 SQL 语句影响的行数(
     */
    public function rowCount(){
        return call_user_func_array(array($this->PDOStatement,'rowCount'),array());
    }
    public function debugDumpParams(){
        return call_user_func_array(array($this->PDOStatement,'debugDumpParams'),array());
    }
}