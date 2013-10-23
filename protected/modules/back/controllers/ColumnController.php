<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-10-22
 * Time: 上午12:50
 * To change this template use File | Settings | File Templates.
 */

class ColumnController extends Controller{

    public function actionIndex(){

    }

    /**
     * create
     */
    public function actionCreate(){
        $model = new CategoryForm();
        $attributes = array();
        $flag =  $_GET['tid'];//分类type

        if(isset($_POST['CategoryForm'])){
            //$attributes = $model->attributes = $_POST['CategoryForm'];
            $attributes['fdName'] = $_POST['CategoryForm']['name'];
            $attributes['fdDescription'] = $_POST['CategoryForm']['introduce'];
            $attributes['fdTypeID'] = $_POST['CategoryForm']['flag']==11 ? 11 : 12;
            $attributes['fdParentID'] = isset($_POST['CategoryForm']['pid']) ? $_POST['pid'] : 0;

            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
               // $this->redirect(array('view','id'=>$model->id));
            }
        }

        $this->render('create',array('model'=>$model,'flag'=>$flag));
    }
}