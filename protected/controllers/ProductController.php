<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-19
 * Time: 上午10:42
 * To change this template use File | Settings | File Templates.
 */

class ProductController extends Controller{

    public function actionIndex(){
       $products =  ProductService::factory()->saveProducts();
       print_r(1);exit;
    }

}