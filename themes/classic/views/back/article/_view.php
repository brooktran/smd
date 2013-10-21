<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdContentID')); ?>:</b>
	<?php echo CHtml::encode($data->fdContentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdDomainID')); ?>:</b>
	<?php echo CHtml::encode($data->fdDomainID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdColumnID')); ?>:</b>
	<?php echo CHtml::encode($data->fdColumnID); ?>
	<br />


</div>