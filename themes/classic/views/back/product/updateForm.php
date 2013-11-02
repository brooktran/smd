<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-1
 * Time: 上午12:45
 * To change this template use File | Settings | File Templates.
 */
?>


<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'product-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>



    <?php

    if($cates){
        ?>
        <div class="row">
            <?php echo $form->labelEx($model,'fdColumnID'); ?>
            <?php echo $form->dropDownList($model,'fdColumnID',array(CHtml::listData($cates,'id','fdName')),
                array('empty'=>$cate->column->fdName)
            ); ?>
            <?php echo $form->error($model,'fdColumnID'); ?>
        </div>
    <?php
	}?>
    <div class="row">
        <?php echo $form->labelEx($model,'fdName'); ?>
        <?php echo $form->textField($model,'fdName',array('value'=>$cate->content->fdName)); ?>
        <?php echo $form->error($model,'fdName'); ?>
    </div>


    <?php echo $form->labelEx($model,'fdAreaID'); ?>
    <?php echo $form->textField($model,'fdAreaID'); ?>
    <?php echo $form->error($model,'fdAreaID'); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'fdValue'); ?>
        <?php echo $form->textArea($model,'fdValue',array('value'=>$cate->blob->fdValue)); ?>
        <?php echo $form->error($model,'fdValue'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton( '修改'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>