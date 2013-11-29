<?php
/* @var $this NavigateController */
/* @var $model Link */
/* @var $form CActiveForm */
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
                <h5>创建<?php echo $_GET['tid']==Yii::app()->params['NAV_TYPEID'] ? "导航" : "友情链接"?></h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <div class="btn-group">
                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                   href="#collapse2">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </header>
<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'popup-validation',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        "htmlOptions"=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data')
    )); ?>

	<?php echo $form->errorSummary($model); ?>

    <div style="height:40px;"></div>
    <div class="form-group row">

        <?php echo $form->labelEx($model,'fdName',array('class'=>'control-label col-lg-4')); ?>
        <div class="col-lg-4">

            <?php echo $form->textField($model,'fdName',array('size'=>60,'maxlength'=>255,'class'=>'validate[required] form-control')); ?>
            <?php echo $form->error($model,'fdName'); ?>
        </div>
    </div>

<!--    <div class="form-group row">-->
<!---->
<!--        --><?php //echo $form->labelEx($model,'fdText',array('class'=>'control-label col-lg-4')); ?>
<!--        <div class="col-lg-4">-->
<!---->
<!--            --><?php //echo $form->textField($model,'fdText',array('size'=>60,'maxlength'=>200,'class'=>'validate[required] form-control')); ?>
            <?php echo $form->error($model,'fdText'); ?>
<!--        </div>-->
<!--    </div>-->


    <div class="form-group row">

        <?php echo $form->labelEx($model,'fdHref',array('class'=>'control-label col-lg-4')); ?>
        <div class="col-lg-4">

            <?php echo $form->textField($model,'fdHref',array('size'=>60,'maxlength'=>255,'class'=>'validate[required] form-control')); ?>
            <?php echo $form->error($model,'fdHref'); ?>
        </div>
    </div>
    <input type="hidden" name='new' value='<?php echo $tid;?>'>


    <div class="form-actions no-margin-bottom" style="margin-left: 240px;">
        <?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存',array('class'=>"btn btn-primary")); ?>
    </div>



<?php $this->endWidget(); ?>

</div><!-- form -->
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!--