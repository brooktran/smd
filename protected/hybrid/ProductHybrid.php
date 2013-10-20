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

    private  function _getProduct(){
        if(empty($this->product)){
            $this->product = new Product();
        }
        return $this->product;
    }

    /**
     * 保存产品信息
     *
     */
    public function saveProducts($properties){
        $product = $this->_getProduct();
        if($properties){
            foreach ($properties as $name=>$value){
                $product->$name=$value;
            }
        }

        $result= $product->save();
        $this->id = $result->getPrimaryKey();

        return $result;
    }





}