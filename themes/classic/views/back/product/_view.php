<?php
/* @var $this ProductController */
/* @var $data Product */
$product = Product::model()->with('content','column','blob')->findByPk($data->id);
?>

<div class="view">	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('fdColumnID')); ?>:</b>
    <?php echo CHtml::encode($product->column->fdName); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>


	<b><?php //echo CHtml::encode($data->getAttributeLabel('fdAreaID')); ?></b>
	<?php //echo CHtml::encode($data->fdAreaID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdContentID')); ?>:</b>
	<?php echo CHtml::encode($product->content->fdName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdDomainID')); ?>:</b>
	<?php echo CHtml::encode($data->fdDomainID); ?>
	<br />

        <a href='<?php echo $this->createUrl('update',array('id'=>$product->id))?>'>修改</a>


        <a href='<?php echo $this->createUrl('delete',array('id'=>$product->id))?>'>删除</a>




</div>