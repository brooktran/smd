<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 上午10:35
 * To change this template use File | Settings | File Templates.
 */
class ProductHybrid{

    private $id=0;
    private $product;

    public function getId(){
        return $this->id;
    }

    public  function getProduct(){
        if(empty($this->product)){
            $this->product = new Product();
        }
        return $this->product;
    }

    /**
     * 保存、修改产品信息
     *
     */
    public function saveProducts($properties){
        $product = $this->getProduct();
        $contentHybrid = new ContentHybrid();

        $contentID = $contentHybrid->saveContent($properties['fdTypeID'], $name = $properties['fdName'], $properties['new']);

        $properties['fdContentID'] = $contentHybrid->id;

        $contentHybrid->saveBlob(null,$properties['fdValue']);

        if($properties){
            unset($properties['fdValue']);
            unset($properties['new']);
            unset($properties['fdName']);
            unset($properties['fdTypeID']);
            foreach ($properties as $name=>$value){
                $product->$name=$value;
            }
        }
        $result= $product->save();

        return $result ? $product : false;
    }





}