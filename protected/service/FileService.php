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


}