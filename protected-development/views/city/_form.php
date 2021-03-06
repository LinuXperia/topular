<?php
/* @var $this CityController */
/* @var $model City */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hashtag'); ?>
		<?php echo $form->textField($model,'hashtag',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'hashtag'); ?>
	</div>

	<div class="row buttons" style="margin-top:20px">
		<button type="submit" class="btn btn-default btn-block"><?php echo ($model->isNewRecord ? 'Create' : 'Save'); ?></button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->