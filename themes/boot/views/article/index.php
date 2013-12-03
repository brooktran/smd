<!--WELCOME AREA-->
<div class="gray_bg">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="welcome">
                    <h1><span class="colored">行业动态</span><span class="colored"> / latest news</span></h1>

                </div></div>
        </div>
    </div></div>
<!--/WELCOME AREA-->
<!--PAGE CONTENT-->
<div class="margintop30"></div>
<div class="container" style="margin-bottom:50px;">
<div class="row">
<div class="span8">
<div class="row">

<?php
if($articles){
foreach($articles as $k=>$article){
    $url = $article->content->coverFile->fdURL;
    $imgUrl = FileService::factory()->imgUrl($url);
?>
    <div class="span8 blog_post">
        <div class="row">
            <div class="span8">
                <div class="row">
                    <div class="span2">
                        <h5 class="gray_bg" style="border-radius:5px;border:1px solid #efefef;padding-right:8px;text-align:right"><i class="icon-calendar"></i> <?php echo date("j / F / Y",strtotime($article->content->fdCreate)); ?></h5>
                        <div class="meta hidden-phone">

                            <span> admin <i class="icon-user"></i></span>

<!--                            <span><a href="#" title="View all posts in software" rel="category">software</a> <i class="icon-list-alt"></i></span>-->
                            <span><a href="javascript:" title="留言">3 留言</a> <i class="icon-comment"></i></span>
                            <hr />
                            <div class="meta_readmore"><a class="readmore" href="<?php echo $this->createUrl('article/artDetail',array('id'=>$article->id));?>"><span class="readmoreicon"></span>更多</a></div>

                        </div>
                    </div>

                    <div class="span6 block">
                        <div class="postheader_bottom">
                            <h3><a href="<?php echo $this->createUrl('article/artDetail',array('id'=>$article->id));?>"><?php echo $article->content->fdName;?></a></h3>
                        </div>
                        <div class="view view-first">
                            <img src="/<?php echo $imgUrl;?>" alt="" />
                            <div class="mask">
                                <a href="/<?php echo $article->content->coverFile->fdURL;?>" rel="prettyPhoto" class="info"></a>
                                <a href="<?php echo $this->createUrl('article/artDetail',array('id'=>$article->id));?>" class="link"></a>

                            </div>
                        </div>
                    </div>
                    <div style="margin-top:-15px;" class="offset2 span6">
                        <p> 研科生物 ---- <?php echo $currentColumn->fdName; ?></p>
                        <p><?php echo Truncate::truncate_utf8_string($article->content->blob->fdValue,80,'......');?></p>
                    </div>

                </div>
            </div>

        </div>
    </div>
<?php
}
}
?>




<!--    <div class="span8 pagination pagination-left">-->
<!--        <ul>-->
<!--            <li><a href='#' class='current'>1</a></li>-->
<!--            <li><a href='#'>2</a></li><li><a href='#'>3</a></li>-->
<!--            <li><a href="#"> Next &rarr; </a></li>-->
<!--        </ul>-->
<!--    </div>-->



</div>
</div>

<?php echo $this->renderPartial('right');?>
</div>

</div>