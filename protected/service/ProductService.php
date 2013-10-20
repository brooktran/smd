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



    /**
     * @param array $properties
     * @return bool|int
     */
    public function updateProduct($properties){
        $productHybrid = new ProductHybrid();
        $product = $productHybrid->getProduct();
        $contentHybrid = new ContentHybrid();

        if($properties['fdContentID']){//修改
            try{
                $contentHybrid->id =$properties['fdContentID'];
                $contentHybrid->updateContent(array('fdName'=>$properties['fdName']));

                $contentHybrid->updateBlob($properties['fdContentID'],array('fdValue'=>$properties['fdValue']));

                $array = array();
                unset($properties['fdValue']);
                unset($properties['fdName']);
                foreach ($properties as $name=>$value){
                    $array[$name]=$value;
                }

                $result= $product->updateByPk($properties['id'],$array);
            }catch (Exception $e){
                return false;
            }
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