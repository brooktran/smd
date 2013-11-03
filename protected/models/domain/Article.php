<?php

/**
 * This is the model class for table "tbArticle".
 *
 * The followings are the available columns in table 'tbArticle':
 * @property integer $id
 * @property integer $fdContentID
 * @property integer $fdDomainID
 * @property integer $fdColumnID
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'tbArticle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id, fdContentID, fdDomainID, fdColumnID', 'required'),
			array('id, fdContentID, fdDomainID, fdColumnID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fdContentID, fdDomainID, fdColumnID', 'safe', 'on'=>'search'),
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
            'content'=>array(self::HAS_ONE,'Content','','on'=>'t.fdContentID=content.id AND content.fdTypeID='.Yii::app()->params['ATTR_ARTICLE_TYPEID']),
            'blob'=>array(self::HAS_ONE,'Blob','','on'=>'content.id=blob.fdContentID'),//文本内容
            'file'=>array(self::HAS_MANY,'File','','on'=>'content.id=file.fdContentID'),//图片
		     'column'=>array(self::BELONGS_TO,'Column','fdColumnID'),//分类
            'contributes'=>array(self::BELONGS_TO,'Contribute','','on'=>'content.id=contributes.fdContentID'),//属性
            'integer'=>array(self::HAS_ONE,'Integer','','on'=>'content.id=Integer.fdContentID','condition'=>'integer.fdAttributeID=contributes.fdAttributeID'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fdContentID' => '文章标题',
			'fdDomainID' => 'Fd Domain',
			'fdColumnID' => '文章分类',
            'content.fdName'=>'文章标题',
            'column.fdName' =>'分类',
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
		$criteria->compare('fdContentID',$this->fdContentID);
		$criteria->compare('fdDomainID',$this->fdDomainID);
		$criteria->compare('fdColumnID',$this->fdColumnID);
        $criteria->with = array('content','column');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}