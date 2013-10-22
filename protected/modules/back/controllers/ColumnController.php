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

        if(isset($_POST['CategoryForm'])){
            $attributes = $model->attributes = $_POST['CategoryForm'];
            $column = ColumnService::factory()->saveColumn($attributes);

            if($column){
                $this->redirect(array('view','id'=>$model->id));
            }
        }

        $this->render('create',array('model',$model));
    }
}