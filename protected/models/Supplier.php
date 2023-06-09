<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property integer $id_supplier
 * @property string $nama_supplier
 * @property string $alamat_supplier
 * @property string $noTelp_supplier
 *
 * The followings are the available model relations:
 * @property Pembelian[] $pembelians
 */
class Supplier extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_supplier, noTelp_supplier', 'required'),
			array('id_supplier', 'numerical', 'integerOnly'=>true),
			array('nama_supplier, alamat_supplier, noTelp_supplier', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_supplier, nama_supplier, alamat_supplier, noTelp_supplier', 'safe', 'on'=>'search'),
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
			'pembelians' => array(self::HAS_MANY, 'Pembelian', 'id_supplier'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_supplier' => 'Id Supplier',
			'nama_supplier' => 'Nama Supplier',
			'alamat_supplier' => 'Alamat Supplier',
			'noTelp_supplier' => 'No Telp Supplier',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_supplier',$this->id_supplier);
		$criteria->compare('nama_supplier',$this->nama_supplier,true);
		$criteria->compare('alamat_supplier',$this->alamat_supplier,true);
		$criteria->compare('noTelp_supplier',$this->noTelp_supplier,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Supplier the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
