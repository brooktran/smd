<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/assets/css/bootstrap-fileupload.min.css">
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
                <h5><?php if($this->action->id=='update'){echo '修改';}else{echo '发布';}?>文章</h5>
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
    <div id="collapse2" class="body collapse in">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'popup-validation',
           // 'enableAjaxValidation'=>false,
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            "htmlOptions"=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data')
        )); ?>


            <?php echo $form->errorSummary($model); ?>
            <?php
            if($cates){
            ?>
            <div class="form-group row">
                <?php echo $form->labelEx($model,'fdColumnID',array('class'=>'control-label col-lg-4')); ?>
                <div class="col-lg-4">
                    <?php echo $form->dropDownList($model,'fdColumnID',CHtml::listData($cates,'id','fdName'),
                        array(
                            'options'=>array($cate->column->id=>array('selected'=>true)),
                            'empty'=>'请选择',
                            'id'=>'sport',
                            'class'=>'validate[required] form-control'
                        )
                    ); ?>
                    <?php echo $form->error($model,'fdColumnID'); ?>
                </div>
            </div>
            <?php
            }
            ?>

            <div class="form-group row">

                <?php echo $form->labelEx($model,'fdName',array('class'=>'control-label col-lg-4')); ?>
                <div class="col-lg-4">

                    <?php echo $form->textField($model,'fdName',array('value'=>$cate->content->fdName,'class'=>'validate[required] form-control')); ?>
                    <?php echo $form->error($model,'fdName'); ?>
                </div>
            </div>

        <div class="form-group">
            <label class="control-label col-lg-4">封面图片</label>
            <div class="col-lg-8">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">选择图片</span>
                                    <span class="fileupload-exists">换一张</span>
                                    <input type='file' name = 'cover'/>
                                </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-4">组图上传</label>
            <div class="col-lg-8">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    + 组图上传
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">+ 组图上传</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                            echo $this->renderPartial('/upload/index');
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <?php
        $this->renderPartial('summernote',array('form'=>$form,'model'=>$model,'cate'=>$cate));
        ?>

          <div class="form-actions no-margin-bottom">
                <?php
                    $str = $this->action->id=='update'? '修改': '发布';
                    echo CHtml::submitButton($str,array('class'=>"btn btn-primary"));
                ?>
            </div>
        <?php $this->endWidget(); ?>
    </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!--</div><!-- form -->

<script src="<?php echo Yii::app()->theme->baseUrl;?>/assets/lib/jasny/js/bootstrap-fileupload.js"></script>
<script>
    function uploadifyAction(fileField,frameId) {
        $.Zebra_Dialog('', {
            source: {
                'iframe': {
                    'src': '<?php echo $this->createUrl('uploadify/basic')?>',
                    'height': 300,
                    'name': 'bagecms_com',
                    'id': 'bagecms_com'
                }
            },
            width: 600,
            'buttons': [
                {
                    caption: '确认',
                    callback: function() {
                        var htmls = $(window.frames['bagecms_com'].document).find("#fileListWarp").html();
                        if(htmls){
                            $("#" + fileField).append(htmls);
                        }else{
                            alert('没有文件被选择');
                        }
                    }
                },
                {
                    caption: '取消',
                    callback: function() {
                        return;
                    }
                }
            ],
            'type': false,
            'title': '附件上传',
            'modal': false
        });
    }


    function uploadifyRemove(fileId,attrName){
        if(confirm('本操作不可恢复，确定继续？')){
            $.post("<?php echo $this->createUrl('uploadify/remove')?>",{imageId:fileId},function(res){
                $("#"+attrName+fileId).remove();
            },'json');
        }
    }

</script>