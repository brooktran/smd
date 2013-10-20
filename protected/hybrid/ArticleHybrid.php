<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 下午2:48
 * To change this template use File | Settings | File Templates.
 */

class ArticleHybrid{

    private $id=0;
    private $article;

    public function __construct($id=0){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }

    private  function _getArticle(){
        if(empty($this->article)){
            $this->article = new Article();
        }
        return $this->article;
    }

    /**
     * 保存文章信息
     */

    public function saveArticleContent($properties){
        $article = $this->_getArticle();
        if($properties){
            foreach ($properties as $name=>$value){
                $article->$name=$value;
            }
        }

        $result= $article->save();
        $this->id = $result->getPrimaryKey();

        return $result;
    }




}