<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#article-grid').yiiGridView('update', {
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
    <a href="<?php echo $this->createUrl('/back/article/create',array('tid'=>Yii::app()->params['ATTR_ARTICLE_TYPEID']))?>" class="btn btn-default btn-xs"><h5>发布文章</h5></a>

    <h5>文章列表</h5>
</header>
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'article-grid',
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

                    'content.fdName',


                    //'fdDomainID',
                    // 'fdColumnID',
                    'column.fdName',
                    array(
                        'class'=>'CButtonColumn',
                    ),
                ),
            )); ?>


           </div>
    </div>
   </div>

<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div>--><!-- search-form -->


<style>
    .grid-view .button-column{
        width:80px !important;
    }
</style>