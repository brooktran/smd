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
        $contentHybrid = new ContentHybrid();

        $contentHybrid->saveContent($properties['fdTypeID'], $name = $properties['fdName']);
        $properties['fdContentID'] = $contentHybrid->id;

        $contentHybrid->saveBlob(null,$properties['fdValue']);

        if($properties){
            unset($properties['fdValue']);
            unset($properties['fdName']);
            unset($properties['fdTypeID']);
            foreach ($properties as $name=>$value){
                $article->$name=$value;
            }
        }

        $result= $article->save();
        return $result ? $article : false;
    }



    /**
     * 浏览次数加一
     *
     * @param $contentId 浏览次数添加的日志的ID
     */
    public function  addContentClick($contentId){
        $content=Content::model()->findByPk($contentId);
        $contentHot=$content->fdHot+1;

        Content::model()->updateByPk($contentId, array('fdHot'=>$contentHot));
    }



}