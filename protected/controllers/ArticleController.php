<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 下午2:43
 * To change this template use File | Settings | File Templates.
 */
class ArticleController extends Controller{
    public $layout = null;

    public function init(){
        Yii::app()->theme="boot";
        $this->layout = "//layouts/column1";
    }

    public function actionIndex(){
        $columnID  = RequestUtils::getNormalRequest('columnID');
        $currentColumn = ColumnService::factory()->getCategoryByID($columnID);
//        $columns = ColumnService::factory()->getChilds($columnID);

        $article = ArticleService::factory()->getArticleByCateID($columnID);

       $this->render('index',array(
           'articles'=>$article,
           'currentColumn'=>$currentColumn
       ));
    }

    public function actionArtDetail(){
        $id = RequestUtils::getNormalRequest('id');
        $article = ArticleService::factory()->getArticle($id);
        $this->render('detail',array('article'=>$article));
    }


}