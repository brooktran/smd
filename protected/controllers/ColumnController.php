<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-12
 * Time: 上午12:09
 * To change this template use File | Settings | File Templates.
 */
class ColumnController extends Controller{
    public $layout = null;

    public function init(){
        Yii::app()->theme="boot";
        $this->layout = "//layouts/column1";
    }

    public function actionIndex(){
        $columnID  = RequestUtils::getNormalRequest('columnID');
        $currentColumn = ColumnService::factory()->getCategoryByID($columnID);
        $columns = ColumnService::factory()->getChilds($columnID);


        $this->render('index',array('columns'=>$columns,'currentColumn'=>$currentColumn));
    }

    public function actionGoods(){
        $this->render('goods');
    }


}