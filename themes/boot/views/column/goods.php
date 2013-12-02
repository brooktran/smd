<!--WELCOME AREA-->
<div class="gray_bg">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="welcome">

                    <h1><span class="colored">产品信息</span><span class="colored"> / detail</span></h1>

                </div>
            </div>
        </div></div></div>
<!--/WELCOME AREA-->
<!--PAGE CONTENT-->
<div class="margintop30"></div>
<style>
    .span9{
        width: 670px;
    }
    .span3{
        width: 370px;
    }
</style>
<div class="container" style="margin-bottom:50px;">
    <div class="row">
        <div class="span9">
            <div class="slider_area">
                <div class="theme-default">
                    <div id="slider" class="nivoSlider">
                        <?php
                        foreach($good->content->files as $file){
                         ?>
                            <img src="/<?php echo $file->fdURL;?>" alt="<?php echo $good->content->fdName;?>" data-rule-maxlength="500"/>
                        <?php
                        }
                        ?>
<!--                        <img src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/portfolio/4.jpg" alt="Portfolio With Slider" />-->
<!--                        <img src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/portfolio/5.jpg" alt="Portfolio With Slider" />-->
<!--                        <img src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/portfolio/6.jpg" alt="Portfolio With Slider" />-->
                    </div>
                </div>
            </div>
        </div>

        <div class="span3">
            <h6 class="prtHeadTitle">产品信息</h6><div class="margintop10"></div>
            <p><strong>产品名称</strong> : <?php echo $good->content->fdName?></p><hr class="prtLine" />
<!--            <p><strong>Client</strong> : WPelement</p><hr class="prtLine" />-->
            <p>
                <strong>产品描述：</strong><br/><br/>
                <?php echo $good->content->blob->fdValue;?>
            <hr class="prtLine" />
            </p>

<!--            <hr class="prtLine" />-->
<!--            <p><strong>供应商</strong> :CSS3</p><hr class="prtLine" />-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis semper lacus a elementum. Mauris et lectus massa. Praesent ac risus lorem. Curabitur accumsan fermentum augue, egestas consectetur nisl pretium vitae. Nulla ac mi ornare nulla laoreet faucibus sit amet et sapien. Curabitur sit amet felis elit. In accumsan lorem eu mauris vehicula gravida.</p>-->
            <a href="javascript:" class="featbtn2"><strong>立 即 购 买</strong> &rarr;</a>
        </div>
    </div>
</div>