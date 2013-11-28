<?php
/* @var $this NavigateController */
/* @var $model Link */
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
		<?php echo $form->label($model,'fdText'); ?>
		<?php echo $form->textField($model,'fdText',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdHref'); ?>
		<?php echo $form->textField($model,'fdHref',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdName'); ?>
		<?php echo $form->textField($model,'fdName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdTarget'); ?>
		<?php echo $form->textField($model,'fdTarget',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdCSS'); ?>
		<?php echo $form->textField($model,'fdCSS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdType'); ?>
		<?php echo $form->textField($model,'fdType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdDomainID'); ?>
		<?php echo $form->textField($model,'fdDomainID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->