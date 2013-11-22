<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-11-19
 * Time: 上午11:41
 * To change this template use File | Settings | File Templates.
 */
class FileService extends AbstractService{

    /**
     * Returns the static model.
     * @return FileService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }


    /**
     * 根据照片ID获取照片file
     *
     * @param $fileID
     * @return CActiveRecord
     *
     */
    public function getFileByPk($fileID)
    {
        return File::model()->with('content')->findByPk($fileID);
    }

    /**
     * 修改封面图片后，删除本地的旧图片
     * @param $path
     */
    public function deleteLocalFile($path){
        $image = Yii::app()->request->baseUrl .'/'. $path;
        if (file_exists($image)) {
            @unlink($image);
        }
    }


    /**
     * @param $uploadFile
     * @param $contentID
     * @return array|bool|File|string
     */
    public function saveFile($uploadFile,$contentID){
        $file = XUpload::upload( $uploadFile, array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250 ), 'allowExts' => 'jpg,gif,png,jpeg', 'maxSize' => 6000000) );

        if(is_array($file)){
            $args = array();
            $args['fdName'] = $file['name'];
            $args['fdTypeID'] = Yii::app()->params['COVER_TYPEID'];
            $args['fdSize']=$file['size'];
            $args['fdURL'] = $file['pathname'];
            $args['fdContentID'] = $contentID;
            $fileObj = ContentService::factory()->saveFile($args);
            return $fileObj;
        }
        return $file;
    }

    /**
     * 修改封面图片时，先删除本地的旧图片，在进行修改
     * @param $uploadFile
     * @param $contentID
     * @return int
     */
    public function updateFile($uploadFile,$contentID){
        $file = XUpload::upload( $uploadFile, array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250 ) , 'allowExts' => 'jpg,gif,png,jpeg', 'maxSize' =>10000000) );
        $args = array();
        $args['fdName'] = $file['name'];
        $args['fdTypeID'] = Yii::app()->params['COVER_TYPEID'];
        $args['fdSize']=$file['size'];
        $args['fdURL'] = $file['pathname'];
        $args['fdContentID'] = $contentID;

        $content = Content::model()->with('coverFile')->findByPk($contentID);
        $this->deleteLocalFile($content->coverFile->fdURL);
        if($content->coverFile->id){
            $fileObj = ContentService::factory()->updateFile($content->coverFile->id, $args);
        }else{
            $fileObj = ContentService::factory()->saveFile($args);
        }


        return $fileObj;
    }


}