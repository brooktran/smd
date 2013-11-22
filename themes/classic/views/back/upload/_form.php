<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-19
 * Time: 上午12:43
 * To change this template use File | Settings | File Templates.
 */
?>
<style>
    .fileListWarp{
        list-style: none;
    }
    .fileListWarp li{
        float: left;
    }
    .none{
        display: none;
    }

</style>

<script>
    function run(imgList){
        $('#show').removeClass('none');
        $('.fileListWarp').append(imgList);
    }
</script>



        <div class="form-group">
            <label class="control-label col-lg-4">组图上传</label>
            <div class="col-lg-8">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                     + 组图上传
                </button>
            </div>
        </div>




        <div class="form-group none" id='show'>
            <label class="control-label col-lg-4">图片列表</label>
            <ul class="fileListWarp">
                <?php foreach((array)$imageList as $key=>$row):?>
                    <?php if($row):?>
                        <li id="image_<?php echo $row['fileId']?>"><a href="<?php echo $this->_baseUrl?>/<?php echo $row['file']?>" target="_blank"><img src="<?php echo $this->_baseUrl?>/<?php echo $row['file']?>" width="40" height="40" align="absmiddle"></a>&nbsp;<br>
                            <a href='javascript:uploadifyRemove("<?php echo $row['fileId']?>", "image_")'>删除</a>
                            <input name="imageList[fileId][]" type="hidden" value="<?php echo $row['fileId']?>">
                            <input name="imageList[file][]" type="hidden" value="<?php echo $row['file']?>">
                        </li>
                    <?php endif?>
                <?php endforeach?>
            </ul>
        </div>




