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
                    <h1><span class="colored">Portfolio</span><span class="grey_colored"> / 6 Columns</span></h1>
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

                <li><a href="#" data-filter=".code">code</a>
                </li>
                <li><a href="#" data-filter=".design">design</a>
                </li>
                <li><a href="#" data-filter=".graphic">graphic</a>
                </li>
                <li><a href="#" data-filter=".mobile">血清</a>
                </li>
                <li><a href="#" data-filter=".print">试剂</a>
                </li>
				<li><a href="#" data-filter=".test">耗材</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end FILTERS -->

    <!-- PORTFOLIO -->
    <section style="padding-top:25px !important;">
        <div id="portfolio" class="row">

            <div class="span2 design block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/8-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/8.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-slider.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-slider.html">Portfolio With Slider</a></h6></div>
                <p style="text-align:center">New Design</p>
            </div>
            <div class="span2 graphic block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/7-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/7.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-video.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-video.html">Portfolio With Video</a></h6></div>
                <p style="text-align:center">HTML5 Design</p>
            </div>
            <div class="span2 mobile block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/5-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/5.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Standart Portfolio</a></h6></div>
                <p style="text-align:center">Another Project</p>
            </div>
            <div class="span2 mobile block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/4-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/4.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Mobile App</a></h6></div>
                <p style="text-align:center">New IOS</p>
            </div>
            <div class="span2 design block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/10-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/10.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Best Design</a></h6></div>
                <p style="text-align:center">HTML5 Design</p>
            </div>
            <div class="span2 code block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/3-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/3.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Some Project</a></h6></div>
                <p style="text-align:center">Web Design</p>
            </div>
            <div class="span2 print block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/6-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/6.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Mobile Web Design</a></h6></div>
                <p style="text-align:center">HTML5 Design</p>
            </div>
            <div class="span2 mobile block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/12-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/12.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Another Motion</a></h6></div>
                <p style="text-align:center">Another Project</p>
            </div>
            <div class="span2 design block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/9-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/9.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Some Project</a></h6></div>
                <p style="text-align:center">Web Design</p>
            </div>
            <div class="span2 code block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/1-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/1.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Your Responsive</a></h6></div>
                <p style="text-align:center">Web Design</p>
            </div>
            <div class="span2 mobile block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/11-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/11.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Other Mobile App</a></h6></div>
                <p style="text-align:center">HTML5 Design</p>
            </div>
            <div class="span2 mobile block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/2-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/2.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Fresh Design</a></h6></div>
                <p style="text-align:center">Another Project</p>
            </div>
			
			<div class="span2 test block ">

                <div class="view view-first">
                    <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/2-460x460.png" alt="" />


                    <div class="mask">
                        <a href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/portfolio/2.png" rel="prettyPhoto" class="info"></a>
                        <a href="./portfolio-single.html" class="link"></a>
                    </div>
                </div>
                <div class="descr"><h6><a href="./portfolio-single.html">Fresh Design</a></h6></div>
                <p style="text-align:center">Another Project</p>
            </div>
			
			
        </div>
        <!-- end PORTFOLIO -->
    </section>
    <!-- end ************************** MIDDLE -->
</div>
<!-- end ************************** CONTAINER -->