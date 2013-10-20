<?php
$this->layout = 'none';

Yii::app()->clientscript
    ->registerCssFile(Yii::app()->theme->baseUrl . '/assets/css/bootstrap.css')
    ->registerCssFile(Yii::app()->theme->baseUrl . '/assets/css/bootstrap-responsive.css')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            0

            <a class="brand" href="#">Project name</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form pull-right">
                    <input class="span2" type="text" placeholder="Email">
                    <input class="span2" type="password" placeholder="Password">
                    <button type="submit" class="btn">Sign in</button>
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
            <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <p>I'm in Section 1.</p>
            </div>
            <div class="tab-pane" id="tab2">
                <p>Howdy, I'm in Section 2.</p>
            </div>
        </div>
    </div>


    <hr>

    <footer>
        <p>&copy; Company 2013</p>
    </footer>

</div>
<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/jquery.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-transition.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-alert.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-modal.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-dropdown.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-scrollspy.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-tab.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-tooltip.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-popover.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-button.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-collapse.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-carousel.js"></script>
<script src="<?php echo  Yii::app()->theme->baseUrl ?>/assets/js/bootstrap/bootstrap-typeahead.js"></script>

</body>
</html>

<script type="text/javascript">
    $(function () {
        $('.tabNav').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    });

</script>