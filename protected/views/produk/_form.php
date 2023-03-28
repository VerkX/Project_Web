<?php
/* @var $this ProdukController */
/* @var $model Produk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produk-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_produk'); ?>
		<?php echo $form->textField($model,'id_produk'); ?>
		<?php echo $form->error($model,'id_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kategori'); ?>
		<?php echo CHtml::activeDropDownList($model, 'id_kategori', CHtml::listData(Kategori::model()->findAll(), 'id_kategori', 'nama_kategori'), array('empty' => '- Pilih Kategori -')); ?>
		<?php echo $form->error($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_merk'); ?>
		<?php echo $form->textField($model,'id_merk'); ?>
		<?php echo $form->error($model,'id_merk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_produk'); ?>
		<?php echo $form->textField($model,'nama_produk',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_produk'); ?>
		<?php echo $form->textField($model,'harga_produk'); ?>
		<?php echo $form->error($model,'harga_produk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok_produk'); ?>
		<?php echo $form->textField($model,'stok_produk'); ?>
		<?php echo $form->error($model,'stok_produk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->