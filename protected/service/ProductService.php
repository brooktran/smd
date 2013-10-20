<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 上午10:37
 * To change this template use File | Settings | File Templates.
 */
class ProductService extends AbstractService{

    /**
     * Returns the static model.
     * @return ProductService the static model class
     */
    public static function factory()
    {
        return  parent::factory(__CLASS__);
    }


    /**
     * 保存产品信息
     * @param $products
     * @return mixed
     */
    public function saveProducts($products){
        $productHybrid = new ProductHybrid();
        $result = $productHybrid->saveProducts($products);
        return $result;
    }

}