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
        $typeID =  $_GET['tid'];//分类type
        $column= ColumnService::factory()->getAllCategoryByTypeID($typeID);

        $this->render('index',array('column'=>$column,tid=>$typeID));
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
        $typeID =  $_GET['tid'];//分类type

        if(isset($_POST['CategoryForm'])){

            $attributes['fdName'] = $_POST['CategoryForm']['name'];
            $attributes['fdDescription'] = $_POST['CategoryForm']['introduce'];
            $attributes['fdTypeID'] = $_POST['CategoryForm']['flag']==
                                    Yii::app()->params['ATTR_ARTICLE_TYPEID'] ? 11 :
                                    Yii::app()->params['ATTR_PRODUCT_TYPEID'];
            $attributes['fdParentID'] = isset($_POST['CategoryForm']['fdParentID']) ? $_POST['CategoryForm']['fdParentID'] : 0;

            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
                $this->redirect($this->createUrl('/back/column',array('tid'=>$typeID)));
            }
        }
        $category = ColumnService::factory()->getAllCategoryByTypeID($typeID);

        $this->render('create',array('model'=>$model,'flag'=>$typeID,'cates'=>$category));
    }

    public function actionUpdate(){
        $model = new CategoryForm();
        $attributes = array();
        $typeID =  $_GET['tid'];//分类type

        if(isset($_POST['CategoryForm'])){
            $attributes['id'] = $_POST['CategoryForm']['id'];
            $attributes['fdName'] = $_POST['CategoryForm']['name'];
            $attributes['fdDescription'] = $_POST['CategoryForm']['introduce'];
            $attributes['fdTypeID'] = $_POST['CategoryForm']['flag']==
                                 Yii::app()->params['ATTR_ARTICLE_TYPEID'] ? 11 :
                                Yii::app()->params['ATTR_PRODUCT_TYPEID'];

            $attributes['fdParentID'] = isset($_POST['CategoryForm']['fdParentID']) ?
                                        $_POST['CategoryForm']['fdParentID'] : 0;

            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
                $this->redirect($this->createUrl('/back/column',array('tid'=>$typeID)));
            }
        }
        $id = $_GET['id'];
        $category = ColumnService::factory()->getCategoryByID($id);
        $categorys = ColumnService::factory()->getAllCategoryByTypeID($typeID);
        $this->render('update',array(
            'model'=>$model,
            'id'=>$id,
            'flag'=>$typeID,
            'cate'=>$category,
            'cates'=>$categorys
        ));
    }

}