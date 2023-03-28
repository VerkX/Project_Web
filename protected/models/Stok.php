<?php

/**
 * This is the model class for table "stok_recent".
 *
 * The followings are the available columns in table 'stok_recent':
 * @property integer $id_produk
 * @property integer $stok_terkini
 * @property integer $id_merk
 * @property integer $stok_produk
 *
 * The followings are the available model relations:
 * @property Produk $idProduk
 * @property Merk $idMerk
 * @property Produk $stokProduk
 */
class Stok extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stok_recent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produk, stok_terkini, id_merk, stok_produk', 'required'),
			array('id_produk, stok_terkini, id_merk, stok_produk', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_produk, stok_terkini, id_merk, stok_produk', 'safe', 'on'=>'search'),
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
			'idProduk' => array(self::BELONGS_TO, 'Produk', 'id_produk'),
			'idMerk' => array(self::BELONGS_TO, 'Merk', 'id_merk'),
			'stokProduk' => array(self::BELONGS_TO, 'Produk', 'stok_produk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_produk' => 'Id Produk',
			'stok_terkini' => 'Stok Terkini',
			'id_merk' => 'Id Merk',
			'stok_produk' => 'Stok Produk',
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

		$criteria->compare('id_produk',$this->id_produk);
		$criteria->compare('stok_terkini',$this->stok_terkini);
		$criteria->compare('id_merk',$this->id_merk);
		$criteria->compare('stok_produk',$this->stok_produk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stok the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
