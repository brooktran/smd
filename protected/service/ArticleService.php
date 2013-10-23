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

    public function getArticleContent(){

    }

    /**
     * 保存文章
     * @param  array $properties
     * @return bool
     */
    public function saveArticle($properties){
        $articleHybrid = new ArticleHybrid();
        $result = $articleHybrid->saveArticleContent($properties);
        return $result;
    }

    public function updateArticle($properties){
        $article = $this->_getArticle();
        $contentHybrid = new ContentHybrid();

        $contentHybrid->id =$properties['fdContentID'];
        $result = $contentHybrid->updateContent(array('fdName'=>$properties['fdName']));

        $blob = Blob::model()->findByAttributes(array('fdContentID'=>$properties['fdContentID'],'fdAttributeID'=>24));
        $blobChange = Blob::model()->updateByPk($blob->id, array('fdValue'=>$properties['fdValue']));

        if($result && $blobChange){
            $array = array();
            unset($properties['fdValue']);
            unset($properties['fdName']);
            foreach ($properties as $name=>$value){
                $array[$name]=$value;
            }

            $result= $article->updateByPk($properties['id'],$array);
        }
        return $result;
    }


    public function  deleteArticle($properties,$delete = false){
        if($delete){
            $blobFlag=Blob::model()->deleteAllByAttributes(array('fdContentID'=>$properties['fdContentID'],'fdAttributeID'=>null));
            //$contributeFlag=Contribute::model()->deleteAllByAttributes(array('fdContentID'=>$properties['fdContentID']));

        }
        $blobFlag=Blob::model()->deleteByAttributes(array('fdContentID'=>$properties['fdContentID'],'fdAttributeID'=>null));
       // $contributeFlag=Contribute::model()->deleteByAttributes(array('fdContentID'=>$properties['fdContentID']));
        $contentFlag=Content::model()->deleteByPk($properties['fdContentID']);
    }



}