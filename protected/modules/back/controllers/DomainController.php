<?php

class DomainController extends Controller
{
	public function actionIndex()
	{
        $id = Yii::app()->params['ATTR_DOMAIN_ID'];
        $model = $this->loadModel($id);
        if(isset($_POST['Domain'])){
             $result = DomainService::factory()->saveDomain($model,$_POST['Domain']);
            if($result){
                $this->redirect($this->createUrl('/back/domain'));
            }
        }
		$this->render('index',array('model'=>$model));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

    /**
     * @param integer $id the ID of the model to be loaded
     * @return Domain the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Domain::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}