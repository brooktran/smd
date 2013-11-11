<?php
$this->layout = 'none';
$this->pageTitle = Yii::app()->name . ' - 首页';
?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8" />
    <title>AWES HTML5 Template | Responsive Portfolio Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="./css/ie.css" />
    <![endif]-->

    <!-- Favicon and Apple Touch Icons -->
    <link rel="shortcut icon" href="./img/ico/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./img/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="./img/ico/apple-touch-icon-57-precomposed.png" />


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        h1, h2, h3, h4, h5, h6, #menu a {font-family:Open Sans !important;}
    </style>


    <link rel='stylesheet' id='layerslider_css-css' href='./assets/LayerSlider/css/layerslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='opensans-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&ver=3.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='./css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrapresponsive-css' href='./css/bootstrap-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='./css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='googleprettify-css' href='./assets/google-code-prettify/prettify.css' type='text/css' media='all' />
    <link rel='stylesheet' id='nivoslider-css' href='./assets/nivo/nivo-slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css' href='./css/prettyPhoto.css' type='text/css' media='all' />
    <script type='text/javascript' src='./js/jquery-1.7.1.min.js'></script>
    <script type='text/javascript' src='./assets/LayerSlider/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='./assets/LayerSlider/js/jquery-easing-1.3.js'></script>

    <script type='text/javascript' src='./js/bootstrap.min.js'></script>
    <script type='text/javascript' src='./js/application.js'></script>
    <script type='text/javascript' src='./js/superfish-menu/superfish.js'></script>
    <script type='text/javascript' src='./js/jquery.nivo.slider.pack.js'></script>
    <script type='text/javascript' src='./js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='./js/slides.min.jquery.js'></script>
    <script type='text/javascript' src='./js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='./js/testimonialrotator.js'></script>
    <script type='text/javascript' src='./js/jquery.waitforimages.js'></script>
    <script type='text/javascript' src='./js/jquery.preloader.js'></script>

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
                skinsPath			: 'assets/LayerSlider/skins/',
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
    <link class="skin" href="./styles/green.css" rel="stylesheet" type="text/css" />

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
                    <a target="_blank" href="#"><div class="icon_rss"></div></a><a target="_blank" href="#"><div class="icon_dribbble"></div></a><a target="_blank" href="#"><div class="icon_forrst"></div></a><a target="_blank" href="#"><div class="icon_lastfm"></div></a><a target="_blank" href="#"><div class="icon_vimeo"></div></a><a target="_blank" href="#"><div class="icon_youtube"></div></a><a target="_blank" href="#"><div class="icon_pinterest"></div></a><a target="_blank" href="#"><div class="icon_linkedin"></div></a><a target="_blank" href="#"><div class="icon_skype"></div></a><a target="_blank" href="#"><div class="icon_flickr"></div></a><a target="_blank" href="#"><div class="icon_picasa"></div></a><a target="_blank" href="#"><div class="icon_google"></div></a><a target="_blank" href="#"><div class="icon_t"></div></a><a target="_blank" href="#"><div class="icon_facebook"></div></a>                </div>
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
                    <a href="./index.html"><img src="./img/logo.png" alt="AWES" title="Responsive HTML5 Template" /></a>
                </div>
            </div>
            <div class="span8">
                <nav>
                    <div class="menu-right-bg"></div>
                    <div class="menu-bg">
                        <ul id="menu">
                            <li><a href="./index.html">Home +</a>
                                <ul>
                                    <li><a href="./index-2.html">Home Without Slider</a></li>
                                </ul>
                            </li>
                            <li><a href="./portfolio-4columns.html">Portfolio +</a>
                                <ul>
                                    <li><a href="#">Portfolio Types</a>
                                        <ul>
                                            <li><a href="./portfolio-slider.html">Portfolio With Slider</a></li>
                                            <li><a href="./portfolio-video.html">Portfolio With Video</a></li>
                                            <li><a href="./portfolio-single.html">Portfolio With Image</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./portfolio-6columns.html">Portfolio 6 Columns</a></li>
                                    <li><a href="./portfolio-4columns.html">Portfolio 4 Columns</a></li>
                                    <li><a href="./portfolio-3columns.html">Portfolio 3 Columns</a></li>
                                    <li><a href="./portfolio-2columns.html">Portfolio 2 Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./elements.html">Features +</a>
                                <ul>
                                    <li><a href="./elements.html">Template Elements</a></li>
                                    <li><a href="./typography.html">Typography</a></li>
                                    <li><a href="./full-width.html">Full Width Page</a></li>
                                    <li><a href="./sitemap.html">Sitemap</a></li>
                                    <li><a href="./404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a target="_blank" href="#">Purchase Now</a></li>
                        </ul>                    </div><div class="menu-left-bg"></div>
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
                <h6>Developer Theme</h6><hr /><div class="text-widget">					<img class="widgetlogo" alt="" src="./img/small_logo.png" />
                    <p>The Internet isn’t just on your computer screen anymore. It’s also on your phone, your tablet, your laptop, and god knows what else in the next few years. So when you visit AWES webpage, morph to ideally match the size and shape of the screen you’re viewing it on.</p>
                </div>                </div>
            <!-- end widget -->
            <!-- widget -->
            <div class="span3">
                <h6>TWITTER</h6><hr />				<div id="jstwitter" class="clearfix">
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
                <h6>Contact info</h6><hr /><p>
                    <i class="icon-map-marker icon-white"></i> PO Box 21177 Little Lonsdale St, Melbourne Victoria 8011 Australia<br />
                    <i class="icon-user  icon-white"></i> +61 (0) 3 8376 6284<br />
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
                    <span style="font-size:11px;">© 2012 AWES Responsive HTML5 Template. Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a></span>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/FOOTER-->
<script src="./js/custom.js"></script>

<!--[if IE]>
<script type="text/javascript">
    runFancy = false;
</script>
<![endif]-->
<script type="text/javascript">
    if (runFancy) {
        jQuery.noConflict()(function($){
            $(".view").preloader();
            $(".theme-default").preloader();
        });
    };
</script>


</body>
</html>
<!--/FOOTER-->