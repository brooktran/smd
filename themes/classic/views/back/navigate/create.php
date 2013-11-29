<?php
/* @var $this NavigateController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Link', 'url'=>array('index')),
	array('label'=>'Manage Link', 'url'=>array('admin')),
);
?>

<?php
$typeID = $_GET['tid'];

if($_GET['tid']==Yii::app()->params['LINK_TYPEID']){
    echo $this->renderPartial('_form', array('model'=>$model,'tid'=>$typeID,  'cates'=>$cates));

}else if($_GET['tid']==Yii::app()->params['NAV_TYPEID']){
    echo $this->renderPartial('nav_form', array('model'=>$model,'tid'=>$typeID, 'cates'=>$cates));
}

?>