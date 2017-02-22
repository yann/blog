<?php
/**
 * author: yangyue
 * time: 17-2-14 上午11:56
 * description:
 */
namespace model;
use com\sql\MysqlBase;
    class categoryModel extends  MysqlBase{
        public function getCategoryName(){
            $results =array();
            $this->exec("SET NAMES 'utf8';");
            $sql = "select name from blog.category ";
            $result = $this->query($sql);
            foreach ($result as $key=>$value) {
                $results[] = $value['name'];
            }
            return $results;
        }
        public function getCategory(){
            $results =array();
            $this->exec("SET NAMES 'utf8';");
            $sql = "select name,id from blog.category ORDER by id";
            $result = $this->query($sql);
            return $result;
        }

        /**
         * delete article by id
         * @param $id
         */
        public function deleteById($id){
            try {
                $sql = "delete  from category WHERE id = $id";
                $result = $this->exec($sql);
            }
            catch (\PDOException $e){
                echo $e->getMessage();
            }
            return $result;
        }

        public function updateById($data){
            $id = $data['id'];
            try{
                $this->exec("SET NAMES 'utf8';");
                $this->beginTransaction();
                $sql = "update category set name=:name WHERE  ID = :id";
                $name = $data['name'];

                $this->prepare($sql);
                $this->bindValue(':id',$id);
                $this->bindValue(':name',$name);

                $result = $this->execute();

            }catch (\PDOException $e){
                echo $e->getMessage();
                $this->rollBack();
                return false;
            }
            if ($result){
                $this->commit();
                return true;
            }
        }

        public function insert_name($data){
            $name = $data['name'];
            try{
                $this->exec("SET NAMES 'utf8';");
                $this->beginTransaction();

                $sql = 'insert into category(id,name)VALUES(NULL,:name)';
                $this->prepare($sql);

                $this->bindValue(':name',$name);
                $result = $this->execute();
            } catch (\PDOException $e){
                $this->rollBack();
                echo $e->getMessage();
            }
            if ($result) {
                $this->commit();
                return true;
            }
            else{
                return false;
            }
        }

    }