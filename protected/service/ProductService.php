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
        $product = Product::model()->findByPk($id);
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
        $productHybrid = new ProductHybrid();
        $product = $this->getProduct($properties['id']);
        $contentHybrid = new ContentHybrid($product->fdContentID);

        try{
            $contentHybrid->updateContent(array('fdName'=>$properties['fdName']));
            $contentHybrid->updateBlob($contentHybrid->content->blob->id,array('fdValue'=>$properties['fdValue']));

            $array = array();
            unset($properties['fdValue']);
            unset($properties['fdName']);
            unset($properties['fdTypeID']);
            foreach ($properties as $name=>$value){
                if(!$value){
                    $product->$name=$value;
                }
            }
            $result= $product->save();
        }catch (Exception $e){
            return false;
        }
        return $result;
    }


    /**
     * 删除产品
     * @param array $attr
     * @return int
     */
    public function deleteProducts($attr,$delete=false){
        if($delete){

        }

        $contentHybrid = new ContentHybrid();
        $contentHybrid->id = $attr['fdContentID'];
        $contentNum = $contentHybrid->deleteContent();
        $bold = Blob::model()->findByAttributes(array('fdContentID'=>$attr['fdContentID']));
        $blobNum = $contentHybrid->deleteBlob($bold->id);

        if($contentNum && $blobNum){
            $result = Product::model()->deleteByPk($attr['id']);
        }
        return $result;
    }


}