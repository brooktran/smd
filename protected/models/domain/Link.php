<?php

/**
 * This is the model class for table "tblink".
 *
 * The followings are the available columns in table 'tblink':
 * @property integer $id
 * @property string $fdText
 * @property string $fdHref
 * @property string $fdName
 * @property string $fdTarget
 * @property string $fdCSS
 * @property integer $fdType
 * @property integer $fdDomainID
 */
class Link extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Link the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->domain;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblink';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fdHref', 'required'),
			array('id, fdType, fdDomainID', 'numerical', 'integerOnly'=>true),
			array('fdText', 'length', 'max'=>200),
			array('fdHref, fdName, fdCSS', 'length', 'max'=>255),
			array('fdTarget', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fdText, fdHref, fdName, fdTarget, fdCSS, fdType, fdDomainID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fdText' => '内容描述',
			'fdHref' => '链接地址',
			'fdName' => '名 称',
			'fdTarget' => '跳转方式',
			'fdCSS' => '样式',
			'fdType' => '导航=1 / 友情链接=2',
			'fdDomainID' => '域名',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fdText',$this->fdText,true);
		$criteria->compare('fdHref',$this->fdHref,true);
		$criteria->compare('fdName',$this->fdName,true);
		$criteria->compare('fdTarget',$this->fdTarget,true);
		$criteria->compare('fdCSS',$this->fdCSS,true);
		$criteria->compare('fdType',$this->fdType);
		$criteria->compare('fdDomainID',$this->fdDomainID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}