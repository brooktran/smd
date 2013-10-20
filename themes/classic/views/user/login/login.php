<?php
$this->layout='none';
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl ?>/assets/ico/favicon.png">
    <meta name="description" content="backend">
    <meta name="author" content="brook">

    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/css/login.css">
    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/magic/magic.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
        <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
    <![endif]-->
</head>



<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
    </div>
<?php endif; ?>


<body>

<div class="container">
    <div class="text-center">
        <img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/logo.png" alt="airbool Logo">
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">

            <?php echo CHtml::beginForm('','post',array(
                'class'=>"form-signin"
            )); ?>
                <p class="text-muted text-center">请输入用户名和密码</p>
            <?php echo CHtml::activeTextField($model, 'username', array(
                'class' => 'form-control',
                'placeholder'=>"邮箱/手机/用户名",
                'onfocus' => 'if(this.value=="邮箱/手机/用户名"){this.value=""};',
                'required'=>"required",
                'type'=>"text",
                "autofocus"
            ));?>
            <?php echo CHtml::activePasswordField($model,'password',array(
                'type'=>"password",
                'class'=>"form-control",
                'placeholder'=>"密码：",
                'required'=>"required",
            )) ?>
            <label class="checkbox">
                <?php echo CHtml::activeCheckBox($model,'rememberMe',array(
                    'type'=>"checkbox",
                    'value'=>"remember-me"
                )); ?>
                <?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
            </label>
            <label><?php echo CHtml::errorSummary($model); ?></label>
            <?php echo CHtml::submitButton("登陆",array(
                'class'=>"btn btn-lg btn-primary btn-block",
            )); ?>
            <?php echo CHtml::endForm(); ?>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center">邮箱/手机</p>
                <input type="email" placeholder="Email地址" required="required" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">忘记密码</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <input type="text" placeholder="用户名/邮箱/手机" class="form-control">
                <input type="email" placeholder="邮箱地址" class="form-control">
                <input type="password" placeholder="密码" class="form-control">
                <button class="btn btn-lg btn-success btn-block" type="submit">注册</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">登陆</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">忘记密码</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">注册</a></li>
        </ul>
    </div>


</div> <!-- /container -->
<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'class'=>'login_btn',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>



<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/jquery-2.0.3.min.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/bootstrap.js"></script>

<script>
    $('.list-inline li > a').click(function() {
        var activeForm = $(this).attr('href') + ' > form';
        //console.log(activeForm);
        $(activeForm).addClass('magictime swap');
        //set timer to 1 seconds, after that, unload the magic animation
        setTimeout(function() {
            $(activeForm).removeClass('magictime swap');
        }, 1000);
    });

</script>
</body>
</html>
