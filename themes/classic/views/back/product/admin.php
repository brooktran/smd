<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-move"></i></div>
                <a href="<?php echo $this->createUrl('/back/product/create',array('tid'=>Yii::app()->params['ATTR_PRODUCT_TYPEID']))?>" class="btn btn-default btn-xs"><h5>发布产品</h5></a>

                <h5>产品列表</h5>
            </header>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
        array(
            'class'=>'CCheckBoxColumn',
            'name'=>'id',
            //'value'=>$data->fdContentID,   //注意这里用的是$data
            'htmlOptions'=>array(
                'width'=>'5px',
                'height'=>'25px',
            ),
        ),

		//'fdContentID',
        'content.fdName',
		//'fdDomainID',
        'column.fdName',
        'content.fdCreate',
		//'fdColumnID',
       // 'fdAreaID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


        </div>
    </div>
</div>