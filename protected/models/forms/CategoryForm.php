<?php
class CategoryForm extends CFormModel{
    public $name;
    public $introduce;
    public $fdParentID;
    public $flag;
    public $verifyCode;

    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('introduce, name', 'required'),
            // email has to be a valid email address
            array('name', 'required','message'=>'名称不能为空'),
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

            'name'=>'分类名称',

            'introduce'=>'描述',

        );
    }
}

?>