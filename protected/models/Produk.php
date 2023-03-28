<?php

/**
 * This is the model class for table "produk".
 *
 * The followings are the available columns in table 'produk':
 * @property integer $id_produk
 * @property integer $id_kategori
 * @property integer $id_merk
 * @property string $nama_produk
 * @property integer $harga_produk
 * @property integer $stok_produk
 *
 * The followings are the available model relations:
 * @property Pembelian[] $pembelians
 * @property Kategori $idKategori
 * @property Merk $idMerk
 * @property StokRecent[] $stokRecents
 * @property StokRecent[] $stokRecents1
 */
class Produk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produk', 'required'),
			array('id_produk, id_kategori, id_merk, harga_produk, stok_produk', 'numerical', 'integerOnly'=>true),
			array('nama_produk', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_produk, id_kategori, id_merk, nama_produk, harga_produk, stok_produk', 'safe', 'on'=>'search'),
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
			'pembelians' => array(self::HAS_MANY, 'Pembelian', 'id_produk'),
			'idKategori' => array(self::BELONGS_TO, 'Kategori', 'id_kategori'),
			'idMerk' => array(self::BELONGS_TO, 'Merk', 'id_merk'),
			'stokRecents' => array(self::HAS_MANY, 'StokRecent', 'id_produk'),
			'stokRecents1' => array(self::HAS_MANY, 'StokRecent', 'stok_produk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_produk' => 'Id Produk',
			'id_kategori' => 'Kategori',
			'id_merk' => 'Id Merk',
			'nama_produk' => 'Nama Produk',
			'harga_produk' => 'Harga Produk',
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
		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('id_merk',$this->id_merk);
		$criteria->compare('nama_produk',$this->nama_produk,true);
		$criteria->compare('harga_produk',$this->harga_produk);
		$criteria->compare('stok_produk',$this->stok_produk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
