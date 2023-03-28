<?php
/* @var $this ProdukController */
/* @var $data Produk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_produk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_produk), array('view', 'id'=>$data->id_produk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_merk')); ?>:</b>
	<?php echo CHtml::encode($data->id_merk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_produk')); ?>:</b>
	<?php echo CHtml::encode($data->nama_produk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_produk')); ?>:</b>
	<?php echo CHtml::encode($data->harga_produk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok_produk')); ?>:</b>
	<?php echo CHtml::encode($data->stok_produk); ?>
	<br />


</div>