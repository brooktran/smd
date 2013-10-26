<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'fdColumnID'); ?>
        <?php echo $form->dropDownList($model,'fdColumnID',array(CHtml::listData($cates,'id','fdName'))); ?>
        <?php echo $form->error($model,'fdColumnID'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdName'); ?>
		<?php echo $form->textField($model,'fdName'); ?>
		<?php echo $form->error($model,'fdName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdValue'); ?>
		<?php echo $form->textArea($model,'fdValue'); ?>
		<?php echo $form->error($model,'fdValue'); ?>
	</div>





	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->