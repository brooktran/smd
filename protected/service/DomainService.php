<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-11-5
 * Time: 下午5:29
 * To change this template use File | Settings | File Templates.
 */
class DomainService extends AbstractService{

    /**
     * Returns the static model.
     * @return DomainService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }

    public function saveDomain($model,$post){
        foreach($post as $k=>$value){
            $model->$k = $value;
        }
        return $model->save();
    }
}