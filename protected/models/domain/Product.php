<?php

/**
 * This is the model class for table "tbProduct".
 *
 * The followings are the available columns in table 'tbProduct':
 * @property integer $id
 * @property integer $fdAreaID
 * @property integer $fdContentID
 * @property integer $fdDomainID
 * @property integer $fdColumnID
 */
class Product extends CActiveRecord
{
    public $fdName=null;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'tbProduct';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
           // array('fdName', 'required','message'=>'需要'),
			array(' fdContentID', 'required'),
			array('id, fdAreaID, fdContentID, fdDomainID, fdColumnID', 'numerical', 'integerOnly'=>true),


			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fdAreaID, fdContentID,  fdColumnID', 'safe', 'on'=>'search'),
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
            'content'=>array(self::HAS_ONE,'Content','','on'=>'content.id = t.fdContentID AND content.fdTypeID='.Yii::app()->params['ATTR_PRODUCT_TYPEID']),
            'blob'=>array(self::HAS_ONE,'Blob','','on'=>'content.id=blob.fdContentID'),//文本内容
            'file'=>array(self::HAS_MANY,'File','','on'=>'content.id=file.fdContentID'),//图片
            'column'=>array(self::BELONGS_TO,'Column','fdColumnID'),//分类
            'area'=>array(self::BELONGS_TO,'Area','fdArea'),//地区（产地）
           // 'price'=>array(self::HAS_ONE,'Price','','on'=>'content.id=column.fdContentID'),//价格
          //  'contributes'=>array(self::BELONGS_TO,'Contribute','','on'=>'content.id=contributes.fdContentID'),//属性
         //   'integer'=>array(self::HAS_ONE,'Integer','','on'=>'content.id=Integer.fdContentID','condition'=>'integer.fdAttributeID=contributes.fdAttributeID'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '产品序号',
			'fdAreaID' => '地区',
			'fdContentID' => '产品名称',
			'fdDomainID' => 'Fd Domain',
			'fdColumnID' => '分类名称',
            'fdValue' =>'产品信息',
            'content.fdName'=>'产品名称',
            'column.fdName'=>'分类名称',
            'content.fdCreate'=>'发布时间'
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

        $criteria->with = array('content','column');
		$criteria->compare('id',$this->id);
		$criteria->compare('fdAreaID',$this->fdAreaID);
		$criteria->compare('fdContentID',$this->fdContentID);
		$criteria->compare('fdDomainID',$this->fdDomainID);
		$criteria->compare('fdColumnID',$this->fdColumnID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}