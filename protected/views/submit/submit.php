<?php
/* @var $this incidentController */
/* @var $model incident */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incident-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<?php echo $form->dropDownList($model, 'feedbackType', array(IncidentFeedbackType::POSITIVE, IncidentFeedbackType::NEGATIVE)); ?>
	<?php echo $form->labelEx($model,'feedbackType'); ?>
	<?php echo $form->error($model,'name'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'routeId'); ?>
	<?php echo $form->textField($model,'routeId'); ?>
	<?php echo $form->error($model,'routeId'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'timestamp'); ?>
	<?php echo $form->textField($model,'timestamp'); ?>
	<?php echo $form->error($model,'timestamp'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'description'); ?>
	<?php echo $form->textField($model,'description'); ?>
	<?php echo $form->error($model,'description'); ?>
</div>

<div class="row buttons">
	<?php echo CHtml::submitButton('Submit'); ?>
</div>

<?php $this->endWidget(); ?>
