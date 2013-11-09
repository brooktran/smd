<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Update Article', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Article', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
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
//		'fdContentID',
//		'fdDomainID',
//		'fdColumnID',
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


<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap-wysihtml5-hack.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/CLEditor1_4_3/jquery.cleditor.min.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Converter.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Sanitizer.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/Markdown.Editor-hack.js"></script>

