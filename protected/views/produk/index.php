<?php
/* @var $this ProdukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produks',
);

$this->menu=array(
	array('label'=>'Create Produk', 'url'=>array('create')),
	array('label'=>'Manage Produk', 'url'=>array('admin')),
	array('label'=>'List Kategori', 'url'=>$this->createUrl('kategori/index')),
);
?>

<h1>Produks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
