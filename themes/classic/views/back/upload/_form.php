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

<?php
if($content){
    $files = ContentService::factory()->getFileByContent($content->id,0);
}

?>



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
                <?php
                    if($files){
                ?>
                    <script>
                        run('');
                    </script>
                <?php
                    foreach($files as $key=>$file){?>

                        <li id="image_<?php echo $file['id']?>">
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $file['fdURL']?>" target="_blank">
                                <img src="<?php echo Yii::app()->request->baseUrl?>/<?php echo $file['fdURL']?>" width="40" height="40" align="absmiddle"></a>&nbsp;<br>
                            <a href='javascript:uploadifyRemove("<?php echo $file['id']?>", "image_")'>删除</a>
<!--                            <input name="imageList[fileId][]" type="hidden" value="--><?php //echo $row['fileId']?><!--">-->
<!--                            <input name="imageList[file][]" type="hidden" value="--><?php //echo $row['file']?><!--">-->
                        </li>

                <?php }}?>
            </ul>
        </div>




