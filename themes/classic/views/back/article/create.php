<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>

<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
    <div class="icons"><i class="icon-edit"></i></div>
    <a href="<?php echo $this->createUrl('/back/article/create')?>" class="btn btn-default btn-xs"><h5>发布文章</h5></a>

</header>
    <?php echo $this->renderPartial('_form', array('model'=>$model,'cates'=>$cates)); ?>
</div>
</div>
</div>

