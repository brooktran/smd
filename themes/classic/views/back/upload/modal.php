<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-23
 * Time: 上午12:17
 * To change this template use File | Settings | File Templates.
 */
?>
<div id='dialogs'>
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
                    $this->renderPartial('/upload/index');
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default uploadFile" data-dismiss="modal">确 定</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>