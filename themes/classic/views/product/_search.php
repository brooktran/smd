<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdAreaID'); ?>
		<?php echo $form->textField($model,'fdAreaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdContentID'); ?>
		<?php echo $form->textField($model,'fdContentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdDomainID'); ?>
		<?php echo $form->textField($model,'fdDomainID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdColumn'); ?>
		<?php echo $form->textField($model,'fdColumn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->