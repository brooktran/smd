<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-11-17
 * Time: 上午2:14
 * To change this template use File | Settings | File Templates.
 */
class UploadController extends Controller{

    public  function actionIndex(){
        $this->render('index');
    }

    public function actionUpload(){
        $file = XUpload::upload( $_FILES['imgFile']);
        print_r($file);


   }

}