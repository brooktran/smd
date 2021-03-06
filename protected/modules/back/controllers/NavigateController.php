<?php

class NavigateController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
//	public function filters()
//	{
//		return array(
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
//		);
//	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
//	public function accessRules()
//	{
//		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('*'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
//		);
//	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Link;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Link']))
		{
            $model->attributes=$_POST['Link'];
            if($_POST['type']==Yii::app()->params['NAV_TYPEID']){
                $column = ColumnService::factory()->getCategoryByID($_POST['Link']['fdName']);
                $model->fdName = $column->fdName;

                if($column->fdTypeID==Yii::app()->params['ATTR_ARTICLE_TYPEID']){
                    $model->fdHref = substr($this->createUrl('article/index',array('columnID'=>$column->id)),6);
                }
                if($column->fdTypeID==Yii::app()->params['ATTR_PRODUCT_TYPEID']){
                    $model->fdHref = substr($this->createUrl('column/index',array('columnID'=>$column->id)),6);
                }
            }

            $model->fdDomainID =Yii::app()->params['ATTR_DOMAIN_ID'];
            $model->fdType = $_POST['type'];



			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

        $typeID = $_GET['tid'];
        $category = ColumnService::factory()->getAllFirstLevel();
		$this->render('create',array(
			'model'=>$model,
            'tid'=>$typeID,
            'cates'=>$category
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Link']))
		{
            $model->attributes=$_POST['Link'];
            if($_POST['type']==Yii::app()->params['NAV_TYPEID']){
                $column = ColumnService::factory()->getCategoryByID($_POST['Link']['fdName']);
                $model->fdName = $column->fdName;

                if($column->fdTypeID==Yii::app()->params['ATTR_ARTICLE_TYPEID']){
                    $model->fdHref = substr($this->createUrl('article/index',array('id'=>$column->id)),6);
                }
                if($column->fdTypeID==Yii::app()->params['ATTR_PRODUCT_TYPEID']){
                    $model->fdHref = substr($this->createUrl('column/index',array('id'=>$column->id)),6);
                }
            }

            $model->fdType = $_POST['type'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
        $category = ColumnService::factory()->getAllFirstLevel();
		$this->render('update',array(
			'model'=>$model,
            'cates'=>$category
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//		$dataProvider=new CActiveDataProvider('Link');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
        $this->actionAdmin();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
        $typeID = $_GET['tid'];
		$model=new Link('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Link']))
			$model->attributes=$_GET['Link'];

		$this->render('admin',array(
			'model'=>$model,
            'tid'=>$typeID
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Link the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Link::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Link $model the model to be validated
	 */
	public function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='link-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
