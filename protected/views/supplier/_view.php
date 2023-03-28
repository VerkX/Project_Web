<?php
/* @var $this SupplierController */
/* @var $data Supplier */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_supplier')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_supplier), array('view', 'id'=>$data->id_supplier)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_supplier')); ?>:</b>
	<?php echo CHtml::encode($data->nama_supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_supplier')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noTelp_supplier')); ?>:</b>
	<?php echo CHtml::encode($data->noTelp_supplier); ?>
	<br />

	<?php $phone_number = '0' . substr($data->noTelp_supplier, 2); // remove the leading '+62' and add a '0'
	$whatsapp_api_url = Yii::app()->params['whatsapp_api_url'];
	$whatsapp_link = $whatsapp_api_url . '?phone=' . urlencode('+62' . $phone_number);
	?>

<?php 
$supplier_phone_number = '082154909577'; // example phone number
$whatsapp_api_url = 'https://api.whatsapp.com/send';
$country_code_prefix = '+62';
$phone_number = $supplier_phone_number;

// Check if the phone number starts with a '+' symbol and '62' prefix
if (substr($phone_number, 0, 3) === '+62') {
    $phone_number = substr($phone_number, 3); // remove the '+' symbol and '62' prefix
} elseif (substr($phone_number, 0, 1) === '0') {
    $phone_number = substr($phone_number, 1); // remove the '0' prefix
}

// Add the country code prefix
$phone_number = $country_code_prefix . $phone_number;

// Generate the WhatsApp API link
$whatsapp_link = $whatsapp_api_url . '?phone=' . urlencode($phone_number);
$button_html = '<button onclick="window.open(\'' . $whatsapp_link . '\', \'_blank\')" class="button whatsapp"><i class="fab fa-whatsapp"></i> Send message on WhatsApp</button>';

echo $button_html;
?>
</div>

