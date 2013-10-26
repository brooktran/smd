<?php
/* @var $this ArticleController */
/* @var $data Article */
?>
<style>

    ul{

        list-style: none;
    }
    ul li{
        float:left;
        width:130px;
    }
</style>
<div class="view">
<?php
$article = Article::model()->with('content','blob','column')->findByPk($data->id);
?>


 <ul>
     <li>

         <b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
         <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
         <br />
     </li>

     <li>
         <b><?php //echo CHtml::encode($data->getAttributeLabel('fdColumnID')); ?></b>
         <?php echo $article->column->fdName; ?>
         <br />

     </li>

     <li>
         <b><?php //echo CHtml::encode($data->getAttributeLabel('fdContentID')); ?></b>
         <?php echo $article->content->fdName; ?>
         <br />
     </li>
 </ul>











</div>