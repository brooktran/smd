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
        $column= ColumnService::factory()->getAllCategory();

        $this->render('index',array('column'=>$column));
    }

    /**
     * 删除分类
     */
    public function actionDelete(){
        $id = $_GET['id'];
        if(!$id){
            $this->redirect($this->createUrl('/back/column'));
        }
        $column= ColumnService::factory()->deleteByCateId($id);
        if($column){
            $this->redirect($this->createUrl('/back/column'));
        }
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
            $attributes['fdParentID'] = isset($_POST['CategoryForm']['fdParentID']) ? $_POST['CategoryForm']['fdParentID'] : 0;

            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
                $this->redirect($this->createUrl('/back/column'));
            }
        }
        $category = ColumnService::factory()->getAllCategory();

        $this->render('create',array('model'=>$model,'flag'=>$flag,'cates'=>$category));
    }

    public function actionUpdate(){
        $model = new CategoryForm();
        $attributes = array();
        $flag =  $_GET['tid'];//分类type

        if(isset($_POST['CategoryForm'])){
            $attributes['id'] = $_POST['CategoryForm']['id'];
            $attributes['fdName'] = $_POST['CategoryForm']['name'];
            $attributes['fdDescription'] = $_POST['CategoryForm']['introduce'];
            $attributes['fdTypeID'] = $_POST['CategoryForm']['flag']==11 ? 11 : 12;
            $attributes['fdParentID'] = isset($_POST['CategoryForm']['fdParentID']) ? $_POST['CategoryForm']['fdParentID'] : 0;

            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
                $this->redirect($this->createUrl('/back/column'));
            }
        }
        $id = $_GET['id'];
        $category = ColumnService::factory()->getCategoryByID($id);
        $categorys = ColumnService::factory()->getAllCategory();
        $this->render('update',array(
            'model'=>$model,
            'id'=>$id,
            'flag'=>$flag,
            'cate'=>$category,
            'cates'=>$categorys
        ));
    }

}