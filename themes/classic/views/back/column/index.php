
<!--Begin Datatables-->
<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
    <div class="icons"><i class="icon-move"></i></div>

    <a href="<?php echo $this->createUrl('/back/column/create',array('tid'=>$tid))?>" class="btn btn-default btn-xs"><h5>添加分类</h5></a>
    <h5>分类列表</h5>
</header>
<div id="collapse4" class="body">
<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
	<thead>
		<tr>
			<th >分类名称</th>
			<th>分类序号</th>
			<th colspan="3">操作</th>

		</tr>
	</thead>
	<tbody>

	<?php
	if(!empty($column)){
	foreach($column as $k=>$cate){


	?>
		<tr>
			<td ><input type="checkbox" id="check"> <?php echo $cate->fdName;?></td>
			<td><?php echo $cate->id;?></td>
			<td><a href='<?php echo $this->createUrl('/back/column/create',array('id'=>$cate->id,'tid'=>$cate->fdTypeID))?>'>添加子分类</td>
			<td><a href='<?php echo $this->createUrl('update',array('id'=>$cate->id,'tid'=>$cate->fdTypeID))?>'>修改</a></td>
			<td><a href='<?php echo $this->createUrl('delete',array('id'=>$cate->id,'tid'=>$cate->fdTypeID))?>'>删除</a></td>
		</tr>


<?php

}
}
?>


</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- /.row -->
<!--End Datatables-->