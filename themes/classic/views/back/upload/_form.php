<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-19
 * Time: 上午12:43
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="form-group">
            <label class="control-label col-lg-4">组图上传</label>
            <div class="col-lg-8">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                     + 组图上传
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">+ 组图上传</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                            echo $this->renderPartial('/upload/index');
                        ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">上 传</button>
    <!--                        <a href="javascript:$('#uploadify').uploadify('upload')">-->
    <!--                            <button type="button" class="btn btn-primary">-->
    <!--                            开始上传</button>-->
    <!--                        </a>-->
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->