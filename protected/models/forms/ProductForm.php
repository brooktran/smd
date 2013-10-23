<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-10-21
 * Time: 下午11:01
 * To change this template use File | Settings | File Templates.
 */

class ProductForm extends CFormModel{

    public $fdName;//产品名
    public $fdContentID;//contentID
    public $fdAreaID;//地区ID,产地
    public $fdColumn;//分类
    public $fdValue;//产品信息
    public $standard;//规格
    public $weight;//重量


    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('fdName, fdValue, fdColumn', 'required'),
            // email has to be a valid email address

            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'verifyCode'=>'Verification Code',
            'fdColumn' => '产品分类',
            'fdName' => '产品名称',
            'fdValue' =>'产品信息',
            'standard' =>'规格',
            'weight' => '重量',
            'fdAreaID'=>'产地',
        );
    }


}