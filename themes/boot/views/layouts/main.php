<?php
$this->layout = 'none';
$this->pageTitle = Yii::app()->name . ' - 首页';
?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo yii::app()->theme->baseUrl ?>/assets/css/ie.css" />
    <![endif]-->

    <!-- Favicon and Apple Touch Icons -->
    <link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/ico/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo yii::app()->theme->baseUrl ?>/assets/img/ico/apple-touch-icon-57-precomposed.png" />


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        h1, h2, h3, h4, h5, h6, #menu a {font-family:Open Sans !important;}
    </style>


    <link rel='stylesheet' id='layerslider_css-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/LayerSlider/css/layerslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='opensans-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&ver=3.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrapresponsive-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/css/bootstrap-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='googleprettify-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/google-code-prettify/prettify.css' type='text/css' media='all' />
    <link rel='stylesheet' id='nivoslider-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/nivo/nivo-slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css' href='<?php echo yii::app()->theme->baseUrl ?>/assets/css/prettyPhoto.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery-1.7.1.min.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/LayerSlider/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/LayerSlider/js/jquery-easing-1.3.js'></script>

    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/application.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/superfish-menu/superfish.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.nivo.slider.pack.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/slides.min.jquery.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/testimonialrotator.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.waitforimages.js'></script>
    <script type='text/javascript' src='<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.preloader.js'></script>

    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#layerslider").layerSlider({
                autoStart			: true,
                pauseOnHover		: true,
                firstLayer			: 1,
                animateFirstLayer	: true,
                twoWaySlideshow		: true,
                keybNav				: true,
                touchNav			: true,
                imgPreload			: true,
                navPrevNext			: true,
                navStartStop		: false,
                navButtons			: false,
                skin				: 'defaultskin',
                skinsPath			: '<?php echo yii::app()->theme->baseUrl ?>/assets/LayerSlider/skins/',
                globalBGColor		: 'white',
                yourLogo			: false,
                yourLogoStyle		: 'position: absolute; left: 10px; top: 10px; z-index: 99;',
                yourLogoLink		: false,
                yourLogoTarget		: '_self',

                loops				: 0,
                forceLoopNum		: true,
                autoPlayVideos		: false,


                autoPauseSlideshow	: 'auto',
                youtubePreview		: 'hqdefault.jpg',

                cbInit				: function() { },
                cbStart				: function() { },
                cbStop				: function() { },
                cbPause				: function() { },
                cbAnimStart			: function() { },
                cbAnimStop			: function() { },
                cbPrev				: function() { },
                cbNext				: function() { }    	});
        });

    </script>

    <link class="skin" href="<?php echo yii::app()->theme->baseUrl ?>/assets/styles/green.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!--TOP-->
<div id="TopContentInset">
    <div class="top_line">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p class="feed">AWES is a responsive template for showing your work and everyone in the world.</p>
                </div>
                <div class="span6 soc_icons">
                    <a target="_blank" href="#"><div class="icon_rss"></div></a>
                    <a target="_blank" href="#"><div class="icon_dribbble"></div></a>
                    <a target="_blank" href="#"><div class="icon_forrst"></div></a>
                    <a target="_blank" href="#"><div class="icon_lastfm"></div></a>
                    <a target="_blank" href="#"><div class="icon_vimeo"></div></a>
                    <a target="_blank" href="#"><div class="icon_youtube"></div></a>
                    <a target="_blank" href="#"><div class="icon_pinterest"></div></a>
                    <a target="_blank" href="#"><div class="icon_linkedin"></div></a>
                    <a target="_blank" href="#"><div class="icon_skype"></div></a>
                    <a target="_blank" href="#"><div class="icon_flickr"></div></a>
                    <a target="_blank" href="#"><div class="icon_picasa"></div></a>
                    <a target="_blank" href="#"><div class="icon_google"></div></a>
                    <a target="_blank" href="#"><div class="icon_t"></div></a>
                    <a target="_blank" href="#"><div class="icon_facebook"></div></a>
                </div>
            </div>
        </div>
    </div></div>
<div id="TopTrigger">+</div>
<!--/TOP-->
<div class="page_head">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="logo">
                    <a href="./index.html"><img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/logo.png" alt="AWES" title="Responsive HTML5 Template" /></a>
                </div>
            </div>
            <div class="span8">
                <nav>
                    <div class="menu-right-bg"></div>
                    <div class="menu-bg">
                        <ul id="menu">
                            <li><a href="<?php echo $this->createUrl('homePage/index');?>">首页 </a>
                            </li>
                            <?php
                            $typeID = Yii::app()->params['NAV_TYPEID'];
                            $link = LinkService::factory()->findNavByTypeID($typeID);

                            ?>
                            <li><a href="javascript:"><?php  print_r($link);?>产品中心 +</a>
                                <?php
                                $typeID = Yii::app()->params['ATTR_PRODUCT_TYPEID'];
                                $columns = ColumnService::factory()->getAllCategoryByTypeID($typeID,0);
                                ?>
                                <ul>
                                    <?php
                                    foreach($columns as $column){
                                    $childrens = ColumnService::factory()->getChilds($column->id);
                                    ?>
                                    <li><a href="<?php echo $this->createUrl('column/index',array('columnID'=>$column->id));?>"><?php echo $column->fdName;?></a>
                                        <?php
                                        ColumnService::factory()->listColumnHtml($childrens);
                                        ?>
                                        <?php
                                        }
                                        ?>
                                </ul>
                            </li>
							<li><a href="./contact.html">技术服务</a></li>
                            <li>
                                <?php
                                $typeID = Yii::app()->params['ATTR_ARTICLE_TYPEID'];
                                $columns = ColumnService::factory()->getAllCategoryByTypeID($typeID,0);
                                ?>
                                <a href="javascript:">行业中心 +</a>
								    <ul>
                                    <?php
                                    foreach($columns as $column){
                                        $childrens = ColumnService::factory()->getChilds($column->id);
                                    ?>
                                    <li><a href="<?php echo $this->createUrl('column/index',array('columnID'=>$column->id));?>"><?php echo $column->fdName;?></a>
                                        <?php
                                        ColumnService::factory()->listColumnHtml($childrens);
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </ul>
							
							</li>
                           <!-- <li><a href="./elements.html">Features +</a>
                                <ul>
                                    <li><a href="./elements.html">Template Elements</a></li>
                                    <li><a href="./typography.html">Typography</a></li>
                                    <li><a href="./full-width.html">Full Width Page</a></li>
                                    <li><a href="./sitemap.html">Sitemap</a></li>
                                    <li><a href="./404.html">404 Page</a></li>
                                </ul>
                            </li>-->
                            <li><a href="./contact.html">联系我们</a></li>
                            <li><a target="_blank" href="#">购买指南</a></li>
                        </ul>                    
						</div><div class="menu-left-bg"></div>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php echo $content; ?>


<!--FOOTER-->
<!--FOOTER-->
<footer>
    <div class="container">
        <div class="row">
            <!-- widget -->
            <div class="span3">
                <h6>企业文化</h6><hr /><div class="text-widget">
                    <img class="widgetlogo" alt="" src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/small_logo.png" />
                    <p> 一个好的企业不是靠一个人做出来的，我们有公司团队，21世纪是一个团队合作的年代，一个人再厉害也敌不过一个群体</p>
                </div>                </div>
            <!-- end widget -->
            <!-- widget -->
            <div class="span3">
                <h6>TWITTER</h6><hr />				
				<div id="jstwitter" class="clearfix">
                    <ul id="twitter_update_list"></ul>
                </div>

            </div>
            <!-- end widget -->

            <!-- widget -->
            <div class="span3">
                <h6>FLICKR</h6><hr />				<div id="flickr_badge_wrapper" class="clearfix">

                </div>
            </div>
            <!-- end widget -->

            <!-- widget -->
            <div class="span3">
                <h6>Contact us</h6><hr /><p>
                    <i class="icon-map-marker icon-white"></i> 湖南省 长沙市<br />
                    <i class="icon-user  icon-white"></i> +86 188 7408 5701<br />
                    <i class="icon-envelope icon-white"></i> <a href="mailto:example@yourdomain.com">example@yourdomain.com</a></p>


            </div>
            <!-- end widget -->

        </div>
    </div>
    <hr class="bottom" />
    <div class="bottom_line">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <span style="font-size:11px;">© 2012 AWES Responsive HTML5 Template. Collect from by Laojiu QQ407898830</span>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/FOOTER-->
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/twitter.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/custom.js"></script>

<!--[if IE]>
<script type="text/javascript">
    runFancy = false;
</script>
<![endif]-->

<script type="text/javascript">
 jQuery(document).ready(function(){
	var runFancy = true;
	var Browser = { 
	'isIE' : (navigator.userAgent.indexOf('MSIE') >= 0) && (navigator.userAgent.indexOf('Opera') < 0), 
	'isFirefox' : navigator.userAgent.indexOf('Firefox') >= 0, 
	'isOpera' : navigator.userAgent.indexOf('Opera') >= 0 
	}; 
	
	if(Browser.isIE){
		runFancy = false;
	}
 
    if (runFancy) {
        jQuery.noConflict()(function($){
            $(".view").preloader();
            $(".theme-default").preloader();
        });
    };
 });
</script>


</body>
</html>
<!--/FOOTER-->