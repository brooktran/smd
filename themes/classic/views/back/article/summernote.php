
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />


<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/summernote.min.js"></script>
<script type="text/javascript" src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- include summernote -->
<link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/css/summernote.css"  rel="stylesheet">
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/summernote.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({height: 300, focus: true, tabsize: 2});

        $('.note-editable ').click(function(){
               $(this).addClass('form-control');
        })

           //获取编辑器的val
        $('.note-editor .note-editable').keyup(function(){
            var content = $('.summernote').code();
            $('textarea[name="content"]').val(content);
        })
        $('.note-editor .note-editable').blur(function(){
            var content = $('.summernote').code();
            $('textarea[name="content"]').val(content);
        })



        <?php
        if($cate){
        ?>
        $('.note-editor .note-editable').html('<?php echo $cate->blob->fdValue;?>');
        <?php
        }
        ?>
    });
</script>


<div class="box">
    <header>
        <h5>文本内容</h5>
    </header>
    <div class="body">
        <div class="container">
            <div class="summernote "></div>
        </div>
    </div>
</div>


