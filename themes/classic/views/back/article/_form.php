<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php //$form=$this->beginWidget('CActiveForm', array(
//	'id'=>'article-form',
//	'enableAjaxValidation'=>false,
//)); ?>

	<p class="note row">带 <span class="required">*</span> 的必须填写</p>


    <div id="collapse2" class="body collapse in">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'popup-validation',
            'enableAjaxValidation'=>false,
            "htmlOptions"=>array('class'=>'form-horizontal')
        )); ?>


            <?php echo $form->errorSummary($model); ?>
            <?php
            if($cates){
            ?>
            <div class="form-group row">
                <?php echo $form->labelEx($model,'fdColumnID',array('class'=>'control-label col-lg-4')); ?>
                <div class="col-lg-4">
                    <?php echo $form->dropDownList($model,'fdColumnID',array(CHtml::listData($cates,'id','fdName')),
                        array(
                            'options'=>array($cate->column->id=>array('selected'=>true)),
                            'empty'=>'请选择',
                            'id'=>'sport',
                            'class'=>'validate[required] form-control'
                        )
                    ); ?>
                    <?php echo $form->error($model,'fdColumnID'); ?>
                </div>
            </div>
            <?php
            }
            ?>

            <div class="form-group row">

                <?php echo $form->labelEx($model,'fdName',array('class'=>'control-label col-lg-4')); ?>
                <div class="col-lg-4">

                    <?php echo $form->textField($model,'fdName',array('value'=>$cate->content->fdName,'class'=>'validate[required] form-control')); ?>
                    <?php echo $form->error($model,'fdName'); ?>
                </div>
            </div>

        



            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="icon-th-large"></i></div>
                            <h5>文章内容</h5>
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

                                <textarea id="cleditor" class="form-control"></textarea>



                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->





            <div class="form-actions no-margin-bottom">
                <input type="submit" value="提交" class="btn btn-primary">
            </div>
        <?php $this->endWidget(); ?>
    </div>




	<?php echo $form->errorSummary($model); ?>
    <?php
        if($cates){
    ?>
    <div class="row">




        <?php echo $form->labelEx($model,'fdColumnID'); ?>
        <?php echo $form->dropDownList($model,'fdColumnID',array(CHtml::listData($cates,'id','fdName')),
            array(
                'options'=>array($cate->column->id=>array('selected'=>true)),
                'empty'=>'--请选择--',

            )


        ); ?>
        <?php echo $form->error($model,'fdColumnID'); ?>
    </div>
    <?php
        }
    ?>
	<div class="row">
		<?php echo $form->labelEx($model,'fdName'); ?>
		<?php echo $form->textField($model,'fdName',array('value'=>$cate->content->fdName)); ?>
		<?php echo $form->error($model,'fdName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdValue'); ?>
		<?php echo $form->textArea($model,'fdValue',array('value'=>$cate->blob->fdValue)); ?>
		<?php echo $form->error($model,'fdValue'); ?>
	</div>





	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Create'); ?>
	</div>

<?php //$this->endWidget(); ?>

</div><!-- form -->

<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap-wysihtml5-hack.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/CLEditor1_4_3/jquery.cleditor.min.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Converter.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/pagedown/Markdown.Sanitizer.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/Markdown.Editor-hack.js"></script>
