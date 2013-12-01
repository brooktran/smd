<?php
/* @var $this NavigateController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Link', 'url'=>array('index')),
	array('label'=>'Create Link', 'url'=>array('create')),
	array('label'=>'View Link', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Link', 'url'=>array('admin')),
);
?>


<?php
    if($model->fdType==Yii::app()->params['LINK_TYPEID']){
        echo $this->renderPartial('_form', array('model'=>$model,'tid'=>$model->fdType));
    }
    if($model->fdType==Yii::app()->params['NAV_TYPEID']){
        echo $this->renderPartial('nav_form', array('model'=>$model,'tid'=>$model->fdType,'cates'=>$cates));
    }
?>