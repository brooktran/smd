

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

        <h4>分类列表</h4>


        <div class="fLeft"><a href='<?php echo $this->createUrl('/back/column/create',array('tid'=>$tid))?>'><input type="button" value="添加分类"></a></div>


        <div class='cate'>
            <ul class='category'>
                <li><input type="checkbox" id="check"></li>
                <li>编号</li>
                <li class='w300'>分类名称</li>
                <li style="width: 150px;margin-left: 50px;">操作</li>
            </ul>
        </div>
        <?php
        if(!empty($column)){
            foreach($column as $k=>$cate){
                if($cate->fdParentID==0){
                    $columnService = ColumnService::factory()->getChilds($cate->id)
         ?>
                <div class="listCategory">
                    <ul class='category'>
                        <li><input type="checkbox" id="check"></li>
                        <li><?php echo $k;?></li>
                        <li class='w450'>
                            <?php echo $cate->fdName;?>
                            <ul class='cateChild'>
                                    <?php
                                    if($columnService){
                                        foreach($columnService as $key=>$columns){
                                     ?>
                                        <li class='w650'>
                                            <div class='childDiv' style="margin-right: 200px;margin-left: 70px;"><?php echo $columns['text'];?></div>
                                            <div class='childDiv'> <a href='<?php echo $this->createUrl('update',array('id'=>$columns['id'],'tid'=>$cate->fdTypeID))?>'>修改</a></div>
                                            <div class='childDiv'><a href='<?php echo $this->createUrl('delete',array('id'=>$columns['id']))?>'>删除</a></div>
                                        </li>
                                    <?php
                                            if(is_array($columns['children'])){
                                                foreach($columns['children'] as $child){
                                     ?>
                                                    <li class='w650'>
                                                        <div class='childDiv' style="margin-right: 200px;margin-left: 70px;"><?php echo $child['text'];?></div>
                                                        <div class='childDiv'> <a href='<?php echo $this->createUrl('update',array('id'=>$child['id'],'tid'=>$cate->fdTypeID))?>'>修改</a></div>
                                                        <div class='childDiv'><a href='<?php echo $this->createUrl('delete',array('id'=>$child['id']))?>'>删除</a></div>
                                                    </li>
                                    <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>
                            </ul>
                        </li>

                        <li><a href='<?php echo $this->createUrl('update',array('id'=>$cate->id,'tid'=>$cate->fdTypeID))?>'>修改</a></li>
                        <li><a href='<?php echo $this->createUrl('delete',array('id'=>$cate->id))?>'>删除</a></li>
                    </ul>
                </div>
        <?php
                }
            }
        }
        ?>



<div style="height:60px;"></div>
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
    <th>一级分类</th>
    <th>二级分类</th>
    <th>三级分类</th>
    <th>修改</th>
    <th>删除</th>
</tr>
</thead>
<tbody>

<?php
if(!empty($column)){
foreach($column as $k=>$cate){
if($cate->fdParentID==0){
$columnService = ColumnService::factory()->getChilds($cate->id)
?>
<tr>
    <td><input type="checkbox" id="check"> <?php echo $cate->fdName;?></td>
    <td></td>
    <td></td>
    <td>M</td>
    <td>X</td>
</tr>


<?php
}
}
}
?>


<tr>
    <td>Trident</td>
    <td>Internet Explorer 5.0</td>
    <td>Win 95+</td>
    <td>5</td>
    <td>C</td>
</tr>

<tr>
    <td>Trident</td>
    <td>Internet Explorer 5.5</td>
    <td>Win 95+</td>
    <td>5.5</td>
    <td>A</td>
</tr>

<tr>
    <td>Trident</td>
    <td>Internet Explorer 6</td>
    <td>Win 98+</td>
    <td>6</td>
    <td>A</td>
</tr>

<tr>
    <td>Trident</td>
    <td>Internet Explorer 7</td>
    <td>Win XP SP2+</td>
    <td>7</td>
    <td>A</td>
</tr>

<tr>
    <td>Trident</td>
    <td>AOL browser (AOL desktop)</td>
    <td>Win XP</td>
    <td>6</td>
    <td>A</td>
</tr>

<tr>
    <td>Gecko</td>
    <td>Firefox 1.0</td>
    <td>Win 98+ / OSX.2+</td>
    <td>1.7</td>
    <td>A</td>
</tr>



</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- /.row -->
<!--End Datatables-->