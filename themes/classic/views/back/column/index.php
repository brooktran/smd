

<style>
    .cate{
        width: 700px;
        border-bottom: dashed 1px #000000;
        height: 35px;;
    }
.category{
    list-style: none;
    clear: both;
}
 .category li{
     float: left;
     margin-left: 20px;
     text-align: center;
 }
    .listCategory{
        min-height: ;
    }
    .cateChild{
        list-style: none;
        clear: both;
    }
    .cateChild li{
        clear: both;
        border-bottom: dashed 1px #000000;
        line-height: 30px;
    }
    .childDiv{
        float:left;
        margin-left: 30px;
    }
.w300{
    width:300px;
}
    .w450{
        width: 390px;
    }
    .w650{
        width: 450px;
    }
</style>




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