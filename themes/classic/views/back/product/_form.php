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
        <?php echo $form->labelEx($model,'fdColumn'); ?>
        <?php echo $form->textField($model,'fdColumn'); ?>
        <?php echo $form->error($model,'fdColumn'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdName'); ?>
		<?php echo $form->textField($model,'fdName'); ?>
		<?php echo $form->error($model,'fdName'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'fdAreaID'); ?>
		<?php //echo $form->textField($model,'fdAreaID'); ?>
		<?php //echo $form->error($model,'fdAreaID'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'fdValue'); ?>
		<?php echo $form->textField($model,'fdValue'); ?>
		<?php echo $form->error($model,'fdValue'); ?>
	</div>





	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->