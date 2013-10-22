<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 13-10-21
 * Time: 下午11:01
 * To change this template use File | Settings | File Templates.
 */

class CategoryForm extends CFormModel{

    public $CategoryName;//分类名称
    public $description;//描述
    public $typeID;//文章11，产品12
    public $parentID=0;//



    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('categoryName', 'required'),
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
        );
    }


}