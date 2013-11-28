
<style>
    .form-control.col-lg-6 {
        width: 50% !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>创建<?php echo $_GET['tid']==Yii::app()->params['ATTR_ARTICLE_TYPEID'] ? "文章" : "产品"?>分类</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <div class="btn-group">
                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                   href="#collapse2">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </header>
            <div id="collapse2" class="body collapse in">

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'popup-validation',
                    'enableAjaxValidation'=>false,
                    "htmlOptions"=>array('class'=>'form-horizontal')
                )); ?>


                <?php echo $form->errorSummary($model); ?>
                <?php
                if($cates){
                    if(isset($_GET['id'])){
                        $cate = ColumnService::factory()->getCategoryByID($_GET['id']);
                    }
                    ?>
                    <div class="form-group row">
                        <?php echo $form->labelEx($model,'fdParentID',array('class'=>'control-label col-lg-4')); ?>
                        <div class="col-lg-4">
                            <?php echo $form->dropDownList($model,'fdParentID',CHtml::listData($cates,'id','fdName'),
                                array(
                                    'options'=>array($cate->id=>array('selected'=>true)),
                                    'empty'=>'请选择',
                                    'id'=>'sport',
                                    'class'=>'validate[required] form-control'
                                )
                            ); ?>
                            <?php echo $form->error($model,'fdParentID'); ?>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="form-group row">

                    <?php echo $form->labelEx($model,'name',array('class'=>'control-label col-lg-4')); ?>
                    <div class="col-lg-4">

                        <?php echo $form->textField($model,'name',array('class'=>'validate[required] form-control')); ?>
                        <?php echo $form->error($model,'name'); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="icon-th-large"></i></div>
                                <h5>  <?php echo $form->labelEx($model,'introduce'); ?></h5>
                                <ul class="nav pull-right">
                                    <li>
                                        <div class="btn-group">
                                            <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                               href="#cleditorDiv">
                                                <i class="icon-minus"></i>
                                            </a>
                                            <button class="btn btn-xs btn-danger close-box"><i
                                                    class="icon-remove"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </header>

                            <div id="cleditorDiv" class="body collapse in">
                                <?php echo $form->textArea($model,'introduce',array('class'=>'form-control','id'=>"cleditor",'cols'=>30,'rows'=>5)); ?>
                                <?php echo $form->error($model,'introduce'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <?php echo $form->hiddenField($model,'flag',array('value'=>$flag))?>

                <div class="form-actions no-margin-bottom">
                    <input type="submit" value="创建" class="btn btn-primary">
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!--



</div><!-- form -->

<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap-wysihtml5-hack.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/CLEditor1_4_3/jquery.cleditor.min.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Converter.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Sanitizer.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/Markdown.Editor-hack.js"></script>
