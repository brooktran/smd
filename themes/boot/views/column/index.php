<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-12
 * Time: 上午12:23
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="gray_bg">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="welcome">
                    <h1><span class="colored">产品中心</span><span class="grey_colored"> / Goods</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end PAGE HEADER -->

<!--FILTERS-->
<div class="margintop30"></div>
<div class="container" style="margin-bottom:50px;">
    <div class="row">
        <div class="span12">
            <ul class="unstyled" id="themeFilterableNav">
                <li class="filter-tab">FILTER</li>
                <li class="active-tag"><a data-filter="*" href="#">all</a></li>
                <?php
                if($columns){
                    foreach($columns as $key=>$column){
                    ?>
                    <li><a href="#" data-filter=".goods<?php echo $column['id']?>"><?php echo $column['text'];?></a></li>
                    <?php
                    }
                }else{
                    ?>
                    <li><a href="#" data-filter=".goods<?php echo $currentColumn->id?>"><?php echo $currentColumn->fdName;?></a></li>
                <?php
                }
                ?>
                <li><a href="#" data-filter=".test">code</a></li>

            </ul>
        </div>
    </div>
    <!-- end FILTERS -->

    <!-- PORTFOLIO -->
    <section style="padding-top:25px !important;">
        <div id="portfolio" class="row">

            <?php
            if($columns){
                foreach($columns as $key=>$column){
                    $products = ProductService::factory()->getProductByCateID($column['id']);
                    foreach($products as $product){
                        $url = $product->content->coverFile->fdURL;
                        $imgUrl = FileService::factory()->imgUrl($url);
                    ?>

                    <div class="span2 goods<?php echo $column['id']?> block ">
                        <div class="view view-first">
                            <img src="<?php echo yii::app()->request->baseUrl ?>/<?php echo $imgUrl?>" alt="" />
                            <div class="mask">
                                <a href="<?php echo yii::app()->request->baseUrl ?>/<?php echo $product->content->coverFile->fdURL;?>" rel="prettyPhoto" class="info"></a>
                                <a href="<?php echo $this->createUrl('/column/goods',array('id'=>$product->id));?>" class="link"></a>
                            </div>
                        </div>
                        <div class="descr"><h6><a href="<?php echo $this->createUrl('/column/goods',array('id'=>$product->id));?>"><?php echo $product->content->fdName ?></a></h6></div>
                        <p style="text-align:center"><?php echo $column['text']?></p>
                    </div>
                <?php
                    }
                }
            }else{

                $products = ProductService::factory()->getProductByCateID($currentColumn->id);
                if($products){
                    foreach($products as $product){
                        $url = $product->content->coverFile->fdURL;
                        $imgUrl = FileService::factory()->imgUrl($url);
                    ?>

                    <div class="span2 goods<?php echo $currentColumn->id?> block ">
                        <div class="view view-first">
                            <img src="<?php echo yii::app()->request->baseUrl ?>/<?php echo $imgUrl?>" alt="" />
                            <div class="mask">
                                <a href="<?php echo yii::app()->request->baseUrl ?>/<?php echo $product->content->coverFile->fdURL;?>" rel="prettyPhoto" class="info"></a>
                                <a href="<?php echo $this->createUrl('/column/goods',array('id'=>$product->id));?>" class="link"></a>
                            </div>
                        </div>
                        <div class="descr"><h6><a href="<?php echo $this->createUrl('/column/goods',array('id'=>$product->id));?>"><?php echo $product->content->fdName ?></a></h6></div>
                        <p style="text-align:center"><?php echo $currentColumn->fdName?></p>
                    </div>
            <?php
                    }
                }
            }
            ?>


			
<!--			<div class="span2 test block ">-->
<!---->
<!--                <div class="view view-first">-->
<!--                    <img src="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/portfolio/2-460x460.png" alt="" />-->
<!---->
<!---->
<!--                    <div class="mask">-->
<!--                        <a href="--><?php //echo yii::app()->theme->baseUrl ?><!--/assets/img/portfolio/2.png" rel="prettyPhoto" class="info"></a>-->
<!--                        <a href="./portfolio-single.html" class="link"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="descr"><h6><a href="./portfolio-single.html">Fresh Design</a></h6></div>-->
<!--                <p style="text-align:center">Another Project</p>-->
<!--            </div>-->
			
			
        </div>
        <!-- end PORTFOLIO -->
    </section>
    <!-- end ************************** MIDDLE -->
</div>
<!-- end ************************** CONTAINER -->