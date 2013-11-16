<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-25
 * Time: 下午5:00
 * To change this template use File | Settings | File Templates.
 */
class ArticleForm extends CFormModel{

    public $id=0;
    public $fdName;
    public $fdValue;
    public $fdColumnID;
    public $file;

    public function rules()
    {
        return array(
            // fdName, fdValue, fdColumnID are required
            array('fdName, fdValue', 'required'),
            array('fdName','required','message'=>'标题必填'),
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
            'fdColumnID' => '分  类',
            'fdName' => '文章标题',
            'fdValue'=> '文章内容',

        );
    }

}