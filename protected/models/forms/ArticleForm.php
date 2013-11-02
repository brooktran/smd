<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Laojiu
 * Date: 13-10-25
 * Time: 下午5:00
 * To change this template use File | Settings | File Templates.
 */
class ArticleForm extends CFormModel{

    public $fdName;
    public $fdValue;
    public $fdColumnID;

    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('fdName, fdValue, fdColumnID', 'required'),
            // email has to be a valid email address

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
            'fdColumn' => '分类',
            'fdName' => '新闻标题',
            'fdText'=> '内容',

        );
    }

}