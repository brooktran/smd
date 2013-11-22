<?php
/* @var $this ProductController */
/* @var $model Product */
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
                <h5><?php if($this->action->id=='update'){echo '修改';}else{echo '发布';}?>产品</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <div class="btn-group">
                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                   href="#collapse2">
                                    <i class="icon-chevron-up"></i>
                                </a>
<!--                                <button class="btn btn-xs btn-danger close-box"><i class="icon-remove"></i></button>-->
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
                            <span class="fileupload-preview"><?php if($cate->content->coverImage){echo '<a href="/'.$cate->content->coverImage->fdValue.'" target="_black"><img width="50" src="/'.$cate->content->coverImage->fdValue.'"/></a>';}?></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
                    </div>
                </div>


                <?php
                $this->renderPartial('/upload/_form');
                $this->renderPartial('/article/summernote',array('form'=>$form,'model'=>$model,'cate'=>$cate));
                ?>

                 <div class="form-actions no-margin-bottom">
                    <input type="submit" value="<?php if($this->action->id=='update'){echo '修改';}else{echo '发布';}?>" class="btn btn-primary sub">
                </div>
                <?php $this->endWidget(); ?>
                <?php $this->renderPartial('/upload/modal')?>
            </div>
        </div>
    <!-- /.col-lg-12 -->
    </div>
</div>
<!--</div><!-- form -->

<script src="<?php echo Yii::app()->theme->baseUrl;?>/assets/lib/jasny/js/bootstrap-fileupload.js"></script>

<script>
    $(function(){
        $('.sub').click(function(){
            $('#dialogs').empty();
        })
    })
</script>