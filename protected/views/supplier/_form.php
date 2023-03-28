<?php
/* @var $this SupplierController */
/* @var $model Supplier */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_supplier'); ?>
		<?php echo $form->textField($model,'id_supplier'); ?>
		<?php echo $form->error($model,'id_supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_supplier'); ?>
		<?php echo $form->textField($model,'nama_supplier',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_supplier'); ?>
		<?php echo $form->textField($model,'alamat_supplier',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamat_supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noTelp_supplier'); ?>
		<?php echo $form->textField($model,'noTelp_supplier',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'noTelp_supplier'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->