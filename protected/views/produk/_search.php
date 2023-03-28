<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_produk'); ?>
		<?php echo $form->textField($model,'id_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kategori'); ?>
		<?php echo $form->textField($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_merk'); ?>
		<?php echo $form->textField($model,'id_merk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_produk'); ?>
		<?php echo $form->textField($model,'nama_produk',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_produk'); ?>
		<?php echo $form->textField($model,'harga_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stok_produk'); ?>
		<?php echo $form->textField($model,'stok_produk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->