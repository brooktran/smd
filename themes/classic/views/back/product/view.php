<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<style>
    .form-control.col-lg-6 {
        width: 50% !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>产品信息</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <div class="btn-group">
                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                   href="#collapse2">
                                    <i class="icon-chevron-up"></i>
                                </a>
                                <button class="btn btn-xs btn-danger close-box"><i class="icon-remove"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>

            </header>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'fdAreaID',
		//'fdContentID',
		//'fdDomainID',
		//'fdColumnID',
        array(
            'name'=>'fdContentID',
            'value'=>$model->content->fdName,
        ),
        array(
            'name'=>'fdColumnID',
            'value'=>$model->column->fdName,
        ),
        array(
            'name'=>'fdValue',
            'value'=>$model->blob->fdValue,
        )
	),
)); ?>

        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!--</div><!-- form -->