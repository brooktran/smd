<style>
    .cate{
        width: 500px;
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

</style>

        <h4>栏目列表</h4>


        <div class="fLeft"><a href='<?php echo $this->createUrl('/back/column/create')?>'><input type="button" value="添加栏目"></a></div>


        <div class='cate'>
            <ul class='category'>
                <li><input type="checkbox" id="check"></li>
                <li>编号</li>
                <li>分类名称</li>
                <li>子类名称</li>
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
                        <li><?php echo $cate->fdName;?></li>
                        <li>
                            <?php
                            if($columnService){
                                foreach($columnService as $key=>$columns){
                                    ?>
                                    <ul><?php echo $columns['text'];?></ul>
                                    <?php

                                }
                            }
                            ?>
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


