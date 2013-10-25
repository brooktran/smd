<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>修改商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo yii::app()->theme->baseUrl ?>/assets/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>
<div>
    <?php
    if(Yii::app()->user->hasFlash('success')){
        echo Yii::app()->user->getFlash('success');
    }
    ?>
</div>
<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改分类</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="create">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">

    <?php $form = $this -> beginWidget('CActiveForm',array(
        'id'=>'cateform',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    <?php //echo $form->errorSummary($model); ?>
    <table border="0" width="100%" class="table_a">

        <?php
        if($cates){
           $parent = ColumnService::factory()->getParentByID($cate->fdParentID,$cate->fdTypeID)
        ?>
        <tr>
            <td width=80>
                <?php echo $form -> labelEx($model, 'fdParentID') ?>
            </td>
            <td width=300>
                <?php echo $form -> dropDownList($model,'fdParentID',array(CHtml::listData($cates,'id','fdName')),
                    array(
                        'empty'=>$parent->fdName,
                    )); ?>
            </td>
            <td><?php echo $form-> error($model,'fdParentID');?></td>
        </tr>
        <?php }?>
        <tr>
            <td width=80>
                <?php echo $form -> labelEx($model, 'name') ?>
            </td>
            <td width=300>
                <?php echo $form -> textField($model,'name',array('value'=>$cate->fdName,'size'=>10,'maxlength'=>20,'class'=>'abc')); ?>
            </td>
            <td><?php echo $form-> error($model,'name');?></td>
        </tr>


        <tr>
            <td>
                <?php echo $form -> labelEx($model, 'introduce') ?>
            </td>
            <td>
                <?php echo $form -> textArea($model,'introduce',array('value'=>$cate->fdDescription,'cols'=>30,'rows'=>5)); ?>
            </td>
            <td><?php echo $form-> error($model,'introduce');?></td>
        </tr>
        <?php echo $form->hiddenField($model,'flag',array('value'=>$flag))?>
        <?php echo $form->hiddenField($model,'id',array('value'=>$id))?>

        <tr>
            <td colspan="3" align="center">
                <?php echo CHtml::submitButton('修改')?>
            </td>
        </tr>
    </table>
    <?php $this -> endwidget(); ?>
</div>
</body>
</html>