<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-12-1
 * Time: 下午9:45
 * To change this template use File | Settings | File Templates.
 */
class LinkService extends AbstractService{
    /**
     * Returns the static model.
     * @return LinkService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }

    /**
     * 查找导航，并且倒序，fdOrder值越小越靠前
     * @param $typeID
     * @return array
     */
    public function findNavByTypeID($typeID){
        $criteria = new CDbCriteria();
        $criteria->addCondition('t.fdType='.$typeID);
        //$criteria->order = 't.fdOrder ASC';

        return Link::model()->findAll($criteria);
    }

}