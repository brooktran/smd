<?php

class ArticleController extends Controller
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
     * 获取文章的分类
     * @return array|CActiveRecord|mixed|null
     */
    public function getColumn(){
       $articleColumn = ColumnService::factory()->getAllCategoryByTypeID(Yii::app()->params['ATTR_ARTICLE_TYPEID']);
        return $articleColumn;
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ArticleForm();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ArticleForm'])){
            $userID = 0;//Yii::app()->user->id;
            $fileID = 0;
            try{
                $array = array();
                $array['fdColumnID'] = $_POST['ArticleForm']['fdColumnID'];
                 $array['fdName'] = $_POST['ArticleForm']['fdName'];
                $array['fdValue'] =$_POST['content'];
                $array['fdDomainID'] = Yii::app()->params['ATTR_DOMAIN_ID'];
                $array['fdTypeID'] = Yii::app()->params['ATTR_ARTICLE_TYPEID'];

                $article =  ArticleService::factory()->saveArticle($array);

                if($_FILES['cover']['name']){
                    $file = $this->saveFile($_FILES['cover'],$article->fdContentID);
                    ContentService::factory()->saveText(null, $file->fdURL, $article->fdContentID);
                    $fileID = $file ? $file->id : 0;
                }

                ContentService::factory()->saveContribute($article->fdContentID,  $userID, $fileID);
                $this->redirect($this->createUrl('/back/article/index'));
                return ;
            }catch (Exception $e){
                return false;
            }

		}

       $articleColumn = $this->getColumn();
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
		//$model=$this->loadModel($id);
        $model = new ArticleForm();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ArticleForm'])){
            if(empty($_POST['ArticleForm']['fdColumnID'])){
                $this->redirect_message($this->createUrl('/back/column/create',array('tid'=>Yii::app()->params['ATTR_ARTICLE_TYPEID'])),'请先创建文章分类');
                return;
            }

            $array = array();
            $array['id'] = isset($_GET['id']) ? intval($_GET['id']) : 0;
            $array['fdColumnID'] = $_POST['ArticleForm']['fdColumnID'];
            $array['fdName'] = $_POST['ArticleForm']['fdName'];
            $array['fdValue'] =$_POST['content'];
            $array['fdDomainID'] = Yii::app()->params['ATTR_DOMAIN_ID'];
            $array['fdTypeID'] = Yii::app()->params['ATTR_ARTICLE_TYPEID'];

            $article =  ArticleService::factory()->updateArticle($array);

            if($article && $_FILES['cover']['name']){
                $file = $this->updateFile($_FILES['cover'],$article->fdContentID);
                $content = Content::model()->with('coverImage')->findByPk($article->fdContentID);
                ContentService::factory()->updateText($content->coverImage->id , array('fdValue'=>$file->fdURL));
            }


            if($article){
                $this->redirect($this->createUrl('index'));
            }
		}

        $article = Article::model()->with('content','column','blob')->findByPk($id);

        $categorys = ColumnService::factory()->getAllCategoryByTypeID(Yii::app()->params['ATTR_ARTICLE_TYPEID']);
        $this->render('update',array(
            'model'=>$model,
            'cate'=>$article,
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
        $articleService = ArticleService::factory();
        $result = $articleService->deleteArticleByID($id);
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//		$dataProvider=new CActiveDataProvider('Article');
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
		$model=new Article('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];
        //print_r($model->search());exit;
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Article the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Article::model()->with('content','column','blob')->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Article $model the model to be validated
	 */
	public function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function saveFile($uploadFile,$contentID){
        $file = XUpload::upload( $uploadFile, array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250 ), 'allowExts' => 'jpg,gif,png,jpeg', 'maxSize' => 6000000) );

        if(is_array($file)){
            $args = array();
            $args['name'] = $file['name'];
            $args['typeID'] = Yii::app()->params['COVER_TYPEID'];
            $args['size']=$file['size'];
            $args['url'] = $file['pathname'];
            $args['contentID'] = $contentID;
            $fileObj = ContentService::factory()->saveFile($args);
            return $fileObj;
        }
        return $file;
    }

    /**
     * 修改封面图片时，先删除本地的旧图片，在进行修改
     * @param $uploadFile
     * @param $contentID
     * @return int
     */
    public function updateFile($uploadFile,$contentID){
        $file = XUpload::upload( $uploadFile, array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250 ) , 'allowExts' => 'jpg,gif,png,jpeg', 'maxSize' =>6000000) );
        $args = array();
        $args['fdName'] = $file['name'];
        $args['fdSize']=$file['size'];
        $args['fdURL'] = $file['pathname'];
        $args['fdContentID'] = $contentID;

        $content = Content::model()->with('coverFile')->findByPk($contentID);
        FileService::factory()->deleteLocalFile($content->coverFile->fdURL);
        $fileObj = ContentService::factory()->updateFile($content->coverFile->id, $args);

        return $fileObj;
    }

}
