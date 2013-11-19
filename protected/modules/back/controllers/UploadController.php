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

    /**
     * 上传图片
     */
    public function actionUpload(){
        $file = XUpload::upload( $_FILES['imgFile']);

        if(is_array($file)){
            $args = array();
            $args['name'] = $file['name'];
            $args['typeID'] = 0;
            $args['size']=$file['size'];
            $args['url'] = $file['pathname'];
            $fileObj = ContentService::factory()->saveFile($args);

            if ( $fileObj ) {
                exit( CJSON::encode( array (  'fileId'=>$fileObj->id, 'realFile'=>$fileObj->fdName, 'message' => '上传成功' , 'file' =>  $file['pathname'] ) ) );
            } else {
                @unlink( $file['pathname'] );
                exit( CJSON::encode( array ( 'message' => '数据写入失败，上传错误' ) ) );
            }
        }else {
            exit( CJSON::encode( array (  'message' => '上传错误' ) ) );
        }


   }

    /**
     * 在选择后删除图片
     */
    public function actionRemove(){
        $id = RequestUtils::getNormalRequest('id');

        try {
            $model = $this->loadModel($id);
            $image = Yii::app()->request->baseUrl . $model->fdURL;
            if (file_exists($image)) {
                @unlink($image);
            }
            $fileResult = ContentService::factory()->deleteFileByPk($id);

            $var['state'] = 'success';
            $var['message'] = '删除完成';
        } catch ( Exception $e ) {
            $var['state'] = 'errro';
            $var['message'] = '失败：'.$e->getMessage();
        }
        exit( CJSON::encode( $var ) );

    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = File::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}