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
        width:106px;
    }
</style>
<div class="view">
<?php
$article = Article::model()->with('content','blob','column')->findByPk($data->id);
?>
    <tr>
        <td> <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
        <td> <?php echo $article->content->fdName; ?></td>
        <td>   <?php echo $article->column->fdName; ?> </td>
        <td>   <?php echo $article->content->fdCreate; ?> </td>
        <td> <a href='<?php echo $this->createUrl('update',array('id'=>$article->id))?>'>修改</a></td>
        <td> <a href='<?php echo $this->createUrl('delete',array('id'=>$article->id))?>'>删除</a></td>
    </tr>


</div>





