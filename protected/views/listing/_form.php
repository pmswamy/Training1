<?php
/* @var $this ListingController */
/* @var $model Listing */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listing-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_id'); ?>
		<?php echo $form->textField($model,'listing_id'); ?>
		<?php echo $form->error($model,'listing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_owner_user_id'); ?>
		<?php echo $form->textField($model,'listing_owner_user_id'); ?>
		<?php echo $form->error($model,'listing_owner_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_name'); ?>
		<?php echo $form->textArea($model,'listing_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'listing_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_address'); ?>
		<?php echo $form->textField($model,'listing_address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'listing_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_price'); ?>
		<?php echo $form->textField($model,'listing_price'); ?>
		<?php echo $form->error($model,'listing_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->