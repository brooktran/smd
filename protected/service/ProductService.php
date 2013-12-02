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

    public  function getProduct($id){
        $product = Product::model()->with('content')->findByPk($id);
        return $product;
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



    /**
     * @param array $properties
     * @return bool|int
     */
    public function updateProduct($properties){
        //$productHybrid = new ProductHybrid();
        $product = $this->getProduct($properties['id']);
        $contentHybrid = new ContentHybrid($product->fdContentID);

        try{
            $contentHybrid->updateContent(array('fdName'=>$properties['fdName'], 'new'=>$properties['new']));
            $contentHybrid->updateBlob($contentHybrid->content->blob->id,array('fdValue'=>$properties['fdValue']));

            $array = array();
            unset($properties['fdValue']);
            unset($properties['new']);
            unset($properties['fdName']);
            unset($properties['fdTypeID']);
            $product->fdColumnID = $properties['fdColumnID'];
            foreach ($properties as $name=>$value){
                if(!empty($value)){
                    $product->$name=$value;
                }
            }
            $result= $product->save();
            return $product;
        }catch (Exception $e){
            return false;
        }

    }


    /**
     * 删除产品
     * @param array $attr
     * @return int
     */
    public function  deleteProductByID($id){
        $product = Product::model()->findByPk($id);
        try{
            $contentHybrid = new ContentHybrid($product->fdContentID);
            $blod = Blob::model()->findByAttributes(array('fdContentID'=>$product->fdContentID));
            $contentHybrid->deleteBlob($blod->id);
            $contentHybrid->deleteContent();
            Product::model()->deleteByPk($id);
            return true;
        }catch (Exception $e){
            return false;
        }
    }

    /**
     * 根据分类ID 查出分类下的所有产品
     * @param int $cateID
     * @return array|CActiveRecord|mixed|null
     */
    public function getProductByCateID($cateID){
        $products = Product::model()->with('content')->findAllByAttributes(array('fdColumnID'=>$cateID));
        return $products;
    }

    /**
     * 列出product 前$num 条数据
     * @return array|CActiveRecord|mixed|null
     */
    public function findHotGoods($num=8){
        $criteria = new CDbCriteria();

        $criteria->with = array('content');
        $criteria->addCondition('content.fdHot=1');
        $criteria->limit = $num;
        $criteria->order = 't.id DESC';

        return Product::model()->findAll($criteria);
    }

}