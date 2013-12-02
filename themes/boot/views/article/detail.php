<!--WELCOME AREA-->
<div class="gray_bg">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="welcome">
                    <h1 class="colored">文章内容 / DETAIL</h1></div>
            </div>
        </div>
    </div>
</div>
<!--/WELCOME AREA-->
<div class="margintop30"></div>
<div class="container" style="margin-bottom:50px;">
<div>
<div class="row">
<div class="span8">
    <div class="row">
        <div class="span8 blog_post">
            <div class="row">
                <div class="span8">
                    <div class="view view-first">
                        <img src="/<?php echo $article->content->coverFile->fdURL;?>" alt="" height='300'/>
                    </div>
                </div>

            </div>
            <div class="postheader_bottom">
                <h3></h3>
            </div>
        </div>
        <div style="margin-top:-40px;" class="span8">
            <div class="row">
                <div class="span2">
                    <h5 class="gray_bg" style="border-radius:5px;border:1px solid #efefef;padding-right:8px;text-align:right"><i class="icon-calendar"></i> <?php echo date("j / F / Y",strtotime($article->content->fdCreate)); ?>  </h5>
                    <div class="meta  hidden-phone">
                        <span> admin <i class="icon-user"></i></span>

<!--                        <span><a href="#" title="View all posts in software" rel="category">software</a> <i class="icon-list-alt"></i></span>-->
                        <span><a href="javaScript:" title="评论">3 </a> <i class="icon-comment"></i></span>

                        <hr />
                    </div>
                </div>
                <div class="span6">
                    <p><?php echo $article->content->blob->fdValue;?></p>

                </div>
            </div>



<!--            <a name="comments"></a>-->
<!--            <h6 class="sep_bg colored comments-title"> 3 条留言</h6>-->
<!---->
<!--            <ol class="commentlist">-->
<!---->
<!--                <article class="comment">-->
<!--                    <header class="comment-author">-->
<!--                        <img alt='' src='--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p5-full-70x52.jpg' class='avatar' height='38' width='38' />    <span class="fn">wpelement</span>    <span class="time"> May 11, 2012</span>-->
<!--                    </header>-->
<!--                    <div class="comment-text">-->
<!---->
<!--                        <p>Praesent erat ipsum, vulputate at eleifend ut, molestie at lacus. Ut non ipsum massa. Duis viverra convallis feugiat. Aliquam purus velit, iaculis nec tristique id, porta quis lorem.</p>-->
<!---->
<!--                        <a class='comment-reply-link' href='#' onclick='return addComment.moveForm("comment-33", "33", "respond", "190")'>Reply</a>     </div>-->
<!--                </article>-->
<!--                <ul class='children'>-->
<!---->
<!--                    <article class="comment">-->
<!--                        <header class="comment-author">-->
<!--                            <img alt='' src='--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p2-full-70x52.jpg' class='avatar' height='38' width='38' />    <span class="fn">wpelement</span>    <span class="time"> May 11, 2012</span>-->
<!--                        </header>-->
<!--                        <div class="comment-text">-->
<!---->
<!--                            <p>Nunc ac erat in leo porttitor rutrum. Curabitur sit amet justo odio. Donec vel metus nisi, id eleifend orci. Morbi euismod metus et nisl semper ultricies laoreet nulla ullamcorper.</p>-->
<!---->
<!--                            <a class='comment-reply-link' href='#' onclick='return addComment.moveForm("comment-34", "34", "respond", "190")'>Reply</a>     </div>-->
<!--                    </article>-->
<!---->
<!--                </ul>-->
<!---->
<!---->
<!--                <article class="comment">-->
<!--                    <header class="comment-author">-->
<!--                        <img alt='' src='--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p6-full-70x52.jpg' class='avatar' height='38' width='38' />    <span class="fn">wpelement</span>    <span class="time"> May 11, 2012</span>-->
<!--                    </header>-->
<!--                    <div class="comment-text">-->
<!---->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis semper lacus a elementum. Mauris et lectus massa. Praesent ac risus lorem.</p>-->
<!---->
<!--                        <a class='comment-reply-link' href='#' onclick='return addComment.moveForm("comment-35", "35", "respond", "190")'>Reply</a>     </div>-->
<!--                </article>-->
<!---->
<!--            </ol>-->

<!--            <div class="navigation group">-->
<!--                <div class="prev-posts align"></div>-->
<!--                <div class="next-posts oppalign"></div>-->
<!--            </div>-->




<!--            <div id="respond" class="respond row">-->
<!---->
<!--                <div class="span8">-->
<!--                    <h3 class="sep_bg">Leave a Comment</h3>-->
<!--                    <p>Please keep in mind that comments are moderated and <code>rel="nofollow"</code> is in use. So, please do not use a spammy keyword or a domain as your name, or it will be deleted. Let us have a personal and meaningful conversation instead.</p>-->
<!--                </div>-->
<!--                <div class="span8">-->
<!---->
<!--                  -->
<!--                </div>-->
<!--            </div>-->


        </div>
    </div>
</div>

<div class="span4 sidebar hidden-phone">


    <!-- SEARCH - WIDGET -->

<!--    <form method="get" action="/" />-->
<!--    <div style="margin-left:25px;" class="input-append">-->
<!--        <input placeholder="Enter Your Keyword..." class="span3" name="s" id="appendedInputButton" value="" size="16" type="text" />-->
<!--        <button id="searchsubmit" class="btn btn-success visible-desktop" type="submit"> Go! </button>-->
<!--    </div>-->
<!--    </form>-->


    <!-- end SEARCH - WIDGET -->

    <!-- WIDGET -->
    <div class="well">
        <h4 class="sep_bg">关于我们 ---- About US</h4>
        <div class="text-widget">
            <img class="widgetlogo" alt="" src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/small_logo.png" />
            <p>The Internet isn’t just on your computer screen anymore. It’s also on your phone, your tablet, your laptop, and god knows what else in the next few years. So when you visit AWES webpage, morph to ideally match the size and shape of the screen you’re viewing it on.</p>
        </div>
    </div>
    <!-- end WIDGET -->



    <!-- WIDGET -->
<!--    <div class="well"><h4 class="sep_bg">FEATURED POSTS</h4><div class="featured-posts">				<!--item-->
<!--            <div class="item">-->
<!--                <a href="./blog-single.html" class="image-box">-->
<!--                    <img width="70" height="52" src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p1-full-70x52.jpg" alt="iPhone Diorama" title="" />					</a>-->
<!--                <div class="info">-->
<!--                    <h4><a href="./blog-single.html">iPhone Diorama</a></h4>-->
<!--                    <p>Praesent erat ipsum, vulputate at eleifend ut, molestie at lacus. Ut non ...</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!--item-->
<!--            <!--item-->
<!--            <div class="item">-->
<!--                <a href="./blog-single.html" class="image-box">-->
<!--                    <img width="70" height="52" src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p5-full-70x52.jpg" alt="Design New Graphics" title="" />					</a>-->
<!--                <div class="info">-->
<!--                    <h4><a href="./blog-single.html">Design New Graphics</a></h4>-->
<!--                    <p>Praesent erat ipsum, vulputate at eleifend ut, molestie at lacusticusolan. ...</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!--item-->
<!--            <!--item-->
<!--            <div class="item">-->
<!--                <a href="./blog-single.html" class="image-box">-->
<!--                    <img width="70" height="52" src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p3-full1-70x52.jpg" alt="How to Retouch an Image" title="" />					</a>-->
<!--                <div class="info">-->
<!--                    <h4><a href="./blog-single.html">How to Retouch an Image</a></h4>-->
<!--                    <p>Praesent erat ipsum, vulputate at eleifend ut, molestie at lacus. Ut non ...</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!--item-->
<!--            <!--item-->
<!--            <div class="item">-->
<!--                <a href="./blog-single.html" class="image-box">-->
<!--                    <img width="70" height="52" src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/blog/p6-full-70x52.jpg" alt="Insert A New Code In A File" title="" />					</a>-->
<!--                <div class="info">-->
<!--                    <h4><a href="./blog-single.html">Insert A New Code In A File</a></h4>-->
<!--                    <p>Praesent erat ipsum, vulputate at eleifend ut, molestie at lacus. Ut non ...</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!--item-->
<!--        </div>-->
<!--    </div>			<!-- end WIDGET -->

    <!-- WIDGET -->
<!--    <div class="well"><h4 class="sep_bg">CATEGORIES</h4><ul class="nav nav-pills nav-stacked">-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;design</a></li>-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;general</a></li>-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;jquery</a></li>-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;mobile</a></li>-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;software</a></li>-->
<!--            <li><a href="#"><i class="icon-star-empty"></i> &nbsp;wordpress</a></li>-->
<!--        </ul>-->
<!--    </div>			-->
    <!-- end WIDGET -->




            </div>
        </div>

    </div>
</div>