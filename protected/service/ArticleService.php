<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 下午2:45
 * To change this template use File | Settings | File Templates.
 */
class ArticleService extends AbstractService{

    /**
     * Returns the static model.
     * @return ArticleService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }

    /**
     * 根据ID获取相应的内容
     * @param $id
     * @return array|CActiveRecord|mixed|null
     */
    public function getArticle($id){
        $article = Article::model()->findByPk($id);
        return $article;
    }

    /**
     * @param null $limit
     * @return array|CActiveRecord|mixed|null
     */
    public function findAllArticle($limit=null){
        $criteria = new CDbCriteria();
        $criteria->with = array('content');
        if($limit){
            $criteria->limit = $limit;
            $criteria->offset = 0;
        }
        $criteria->order = 't.id DESC';

        return Article::model()->findAll($criteria);
    }




    /**
     * 保存文章
     * @param  array $properties
     * @return bool|article
     */
    public function saveArticle($properties){
        $articleHybrid = new ArticleHybrid();
        $result = $articleHybrid->saveArticleContent($properties);
        return $result;
    }

    public function updateArticle($properties){
        $article = $this->getArticle($properties['id']);
        $contentHybrid = new ContentHybrid($article->fdContentID);

        try{
            $contentHybrid->updateContent(array('fdName'=>$properties['fdName']));
            $contentHybrid->updateBlob($contentHybrid->content->blob->id,array('fdValue'=>$properties['fdValue']));

            $array = array();
            unset($properties['fdValue']);
            unset($properties['fdName']);
            unset($properties['fdTypeID']);
            $article->fdColumnID = $properties['fdColumnID'];
            foreach ($properties as $name=>$value){
                if(!$value){
                    $article->$name=$value;
                }
            }
            $result= $article->save();
            return $result ? $article : false;
        }catch (Exception $e){
            return false;
        }
    }


    /**
     * 删除文章和商品,先删除文本内容，再去content下删除content.id，再删除article表数据
     *
     * @param int $id
     */
    public function  deleteArticleByID($id){
        $article = Article::model()->findByPk($id);
        try{
            $contentHybrid = new ContentHybrid($article->fdContentID);
            $content = Content::model()->with('coverImage')->findByPk($article->fdContentID);
            $blod = Blob::model()->findByAttributes(array('fdContentID'=>$article->fdContentID));
            $contentHybrid->deleteBlob($blod->id);
            $contentHybrid->deleteFileByContentID();
            $contentHybrid->deleteText($content->coverImage->id);
            $contentHybrid->deleteContent();
            Article::model()->deleteByPk($id);
            return true;
        }catch (Exception $e){
            return false;
        }
    }


    /**
     * 根据分类ID 查出分类下的所有文章
     * @param int $cateID
     * @return array|CActiveRecord|mixed|null
     */
    public function getArticleByCateID($cateID){
        $article = Article::model()->with('content')->findAllByAttributes(array('fdColumnID'=>$cateID));
        return $article;
    }


}