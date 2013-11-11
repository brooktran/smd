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
       $this->render('index');
    }


}