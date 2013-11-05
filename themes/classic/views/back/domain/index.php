<?php
/* @var $this DomainController */

$this->breadcrumbs=array(
	'Domain33',
);
?>


<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'domain-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'fdName'); ?>
        <?php echo $form->textField($model,'fdName'); ?>
        <?php echo $form->error($model,'fdName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fdDescription'); ?>
        <?php echo $form->textArea($model,'fdDescription'); ?>
        <?php echo $form->error($model,'fdDescription'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'fdHost'); ?>
        <?php echo $form->textField($model,'fdHost'); ?>
        <?php echo $form->error($model,'fdHost'); ?>
    </div>





    <div class="row buttons">
        <?php echo CHtml::submitButton( '保存'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->