<?php
/**
 * author: yangyue
 * time: 17-2-7 上午10:17
 * description:
 */
namespace model;
use com\sql\MysqlBase;
    class adminModel extends MysqlBase{
        public function check($username,$password){
            $sql = "select count(*) as num from blog.admin WHERE username=:username and password=:password";
            try{
                $this->prepare($sql);
                $this->bindValue(":username",$username,\PDO::PARAM_STR);
                $this->bindValue(":password",$password,\PDO::PARAM_STR);
                $this->execute();
                $result = $this->fetchAll();
                return $result[0]['num'];
            }catch (\PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }