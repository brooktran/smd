<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-12
 * Time: 上午12:04
 * To change this template use File | Settings | File Templates.
 */
class HomePageController extends Controller{
    public $layout = null;

    public function init(){
        Yii::app()->theme="boot";
        $this->layout = "//layouts/column1";
    }

    public function actionIndex(){
        $this->render('index');
    }

}