<?php
/* @var $this NavigateController */
/* @var $data Link */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdText')); ?>:</b>
	<?php echo CHtml::encode($data->fdText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdHref')); ?>:</b>
	<?php echo CHtml::encode($data->fdHref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdName')); ?>:</b>
	<?php echo CHtml::encode($data->fdName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdTarget')); ?>:</b>
	<?php echo CHtml::encode($data->fdTarget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdCSS')); ?>:</b>
	<?php echo CHtml::encode($data->fdCSS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdType')); ?>:</b>
	<?php echo CHtml::encode($data->fdType); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fdDomainID')); ?>:</b>
	<?php echo CHtml::encode($data->fdDomainID); ?>
	<br />

	*/ ?>

</div>