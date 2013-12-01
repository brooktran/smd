<?php
/* @var $this NavigateController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Link', 'url'=>array('index')),
	array('label'=>'Create Link', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#link-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->
<!---->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
</div><!-- search-form -->

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-move"></i></div>
                <a href="<?php echo $this->createUrl('/back/navigate/create',array('tid'=>$tid))?>" class="btn btn-default btn-xs"><h5>创建</h5></a>

                <h5>栏目列表</h5>
            </header>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'link-grid',
	'dataProvider'=>ColumnService::factory()->dataProvider($tid),//$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
        array(
            'class'=>'CCheckBoxColumn',
            'name'=>'id',
            'htmlOptions'=>array(
                'width'=>'5px',
                'height'=>'25px',
            ),
        ),
		//'fdText',
        'fdName',
		'fdHref',

		//'fdTarget',
		//'fdCSS',

		//'fdType',
//        array(
//            'name'=>'fdType',
//            //'filter'=>array(1=>'导航',2=>'友情链接')
//        ),
        /*'fdDomainID',
        */
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

        </div>
    </div>
</div>

<style>
    .grid-view .button-column{
        width:80px !important;
    }
</style>