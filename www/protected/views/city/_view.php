<?php
/* @var $this CityController */
/* @var $data City */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_city')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_city), array('view', 'id'=>$data->id_city)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NameCity')); ?>:</b>
	<?php echo CHtml::encode($data->NameCity); ?>
	<br />


</div>