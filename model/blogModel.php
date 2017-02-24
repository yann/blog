<?php
/**
 * author: yangyue
 * time: 17-2-5 上午9:28
 * description:
 */
namespace model;
use com\sql\MysqlBase;
    class blogModel extends MysqlBase{
        public function getIndex(){
            $results =array();
            $this->exec("SET NAMES 'utf8';");
            $sql = "select id,title,author,summary,ctime from blog.article limit 5 ";
            $result = $this->query($sql);
            foreach ($result as $key=>$value) {
                $value['ctime'] = date('Y-m-d',strtotime($value['ctime']));
                $results[] = $value;
            }
            return $results;
        }
        public function getArticleById($id){
            $results =array();
            $this->exec("SET NAMES 'utf8';");
            $sql = "select id,title,author,category,content,ctime from blog.article where id=$id";
            $result = $this->query($sql);
            foreach ($result as $key=>$value) {
                $value['ctime'] = date('Y-m-d',strtotime($value['ctime']));
                $results[] = $value;
            }
            return $results;
        }

        public function getPages(){
            $this->exec("SET NAMES 'utf8';");
            $sql = "select count(*) as pages from blog.article";
            $result = $this->query($sql);
            $pages = $result[0]['pages'];
            return $pages;
        }
        public function getList(){
            $results =array();
            $this->exec("SET NAMES 'utf8';");
            $sql = "select id,title,author,summary,ctime from blog.article ORDER BY id DESC ";
            $result = $this->query($sql);
            foreach ($result as $key=>$value) {
                $value['ctime'] = date('Y-m-d',strtotime($value['ctime']));
                $results[] = $value;
            }
            return $results;
        }

        //add
        public function insert_article($data){
            try{
                $this->exec("SET NAMES 'utf8';");
                $this->beginTransaction();

            $sql = 'insert into article
              (id,title,author,category,content,summary,ctime,rtime)
              VALUES(NULL,:title,:author,:category,:content,:summary,:ctime,NULL)';
            $title = $data['title'];
            $author = $data['author'];
            $category = $data['category'];
            $content = $data['content'];
            $str = mb_substr($content,0,200);
            $cha=mb_detect_encoding($str);
            $summary = iconv($cha,"UTF-8",$str);
            $ctime = date('Ymd',time());

            $this->prepare($sql);

            $this->bindValue(':title',$title);
            $this->bindValue(':author',$author,\PDO::PARAM_STR);
            $this->bindValue(':category',$category,\PDO::PARAM_STR);
            $this->bindValue(':content',$content,\PDO::PARAM_STR);
            $this->bindValue(':summary',$summary,\PDO::PARAM_STR);
            $this->bindValue(':ctime',$ctime,\PDO::PARAM_STR);
            //$this->bindValue(':rtime',$rtime,\PDO::PARAM_INT);
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


        /**
         * delete article by id
         * @param $id
         */
        public function deleteById($id){
            try {
                $sql = "delete  from article WHERE id = $id";
                $result = $this->exec($sql);
            }
            catch (\PDOException $e){
                echo $e->getMessage();
            }
            return $result;
        }


        /**
         * @param $data
         * @return bool
         * update article
         */
        public function updateById($data){

            $id = $data['article_id'];
            try{
                $this->exec("SET NAMES 'utf8';");
                $this->beginTransaction();
                $sql = "update article set title =:title,category=:category,author=:author,content=:content,rtime=:rtime WHERE  ID = :id";
                $title = $data['title'];
                $author = $data['author'];
                $category = $data['category'];
                $content = $data['content'];
                $rtime = date('Ymd',time());

                $this->prepare($sql);
                $this->bindValue(':id',$id);
                $this->bindValue(':title',$title);
                $this->bindValue(':author',$author,\PDO::PARAM_STR);
                $this->bindValue(':category',$category,\PDO::PARAM_STR);
                $this->bindValue(':content',$content,\PDO::PARAM_STR);
                $this->bindValue(':rtime',$rtime,\PDO::PARAM_STR);

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

    }