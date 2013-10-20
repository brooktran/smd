<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdAreaID'); ?>
		<?php echo $form->textField($model,'fdAreaID'); ?>
		<?php echo $form->error($model,'fdAreaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdContentID'); ?>
		<?php echo $form->textField($model,'fdContentID'); ?>
		<?php echo $form->error($model,'fdContentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdDomainID'); ?>
		<?php echo $form->textField($model,'fdDomainID'); ?>
		<?php echo $form->error($model,'fdDomainID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdColumn'); ?>
		<?php echo $form->textField($model,'fdColumn'); ?>
		<?php echo $form->error($model,'fdColumn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->