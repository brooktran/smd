<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
//	public $layout='//layouts/column2';

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
           ''
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		//$model=new Product;
        $model = new ProductForm();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductForm']))
		{
            if(empty($_POST['ProductForm']['fdColumnID'])){
                $this->redirect_message($this->createUrl('/back/column/create',array('tid'=>Yii::app()->params['ATTR_PRODUCT_TYPEID'])),'请先创建产品分类');
                return;
            }
            $array = array();
			$model->attributes=$_POST['ProductForm'];
            $array['fdColumnID'] = $_POST['ProductForm']['fdColumnID'];
            $array['fdName'] = $_POST['ProductForm']['fdName'];
            $array['fdValue'] =$_POST['ProductForm']['fdValue'];
            $array['fdAreaID'] =isset($_POST['ProductForm']['fdAreaID']) ? $_POST['ProductForm']['fdAreaID'] : null;
            $array['fdDomainID'] = Yii::app()->params['ATTR_DOMAIN_ID'];
            $array['fdTypeID'] = Yii::app()->params['ATTR_PRODUCT_TYPEID'];

           $product =  ProductService::factory()->saveProducts($array);
			if($product){
                $this->redirect($this->createUrl('/back/product/index'));
                return;
            }
		}

		$articleColumn = ColumnService::factory()->getAllCategoryByTypeID(Yii::app()->params['ATTR_PRODUCT_TYPEID']);
        $this->render('create',array(
            'model'=>$model,
            'cates'=>$articleColumn,
        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new ProductForm();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        if(isset($_POST['ProductForm']))
        {
            $array = array();
            $model->attributes=$_POST['ProductForm'];
            $array['id'] = isset($_GET['id']) ? intval($_GET['id']) : null;
            $array['fdColumnID'] = $_POST['ProductForm']['fdColumnID']?$_POST['ProductForm']['fdColumnID']:0;
            $array['fdName'] = $_POST['ProductForm']['fdName'];
            $array['fdValue'] =$_POST['ProductForm']['fdValue'];
            $array['fdAreaID'] =isset($_POST['ProductForm']['fdAreaID']) ? $_POST['ProductForm']['fdAreaID'] : null;
            $array['fdDomainID'] = Yii::app()->params['ATTR_DOMAIN_ID'];
            $array['fdTypeID'] = Yii::app()->params['ATTR_PRODUCT_TYPEID'];

            $product =  ProductService::factory()->updateProduct($array);
            if($product){
                $this->redirect($this->createUrl('/back/product/index'));
                return;
            }
        }

        //$id = $_GET['id'];
        $product = Product::model()->with('content','column','blob')->findByPk($id);

        $categorys = ColumnService::factory()->getAllCategoryByTypeID(Yii::app()->params['ATTR_PRODUCT_TYPEID']);
		$this->render('update',array(
			'model'=>$model,
            'cate'=>$product,
            'cates'=>$categorys
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete();
        $ressult = ProductService::factory()->deleteProductByID($id);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//		$dataProvider=new CActiveDataProvider('Product');
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
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Product::model()->with('content','column','blob')->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	public function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
