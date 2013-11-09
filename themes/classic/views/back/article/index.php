<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);

$this->menu=array(
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>





<!--Begin Datatables-->
<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
    <div class="icons"><i class="icon-move"></i></div>
    <h5>文章列表</h5>
</header>
<div id="collapse4" class="body">
<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
<thead>

<tr>
    <th>文章序号</th>
    <th>文章标题</th>
    <th>分类</th>
    <th>发布时间</th>
    <th colspan='2'>操作</th>

</tr>
</thead>
<tbody>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>

</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- /.row -->
<!--End Datatables-->