<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>

<h1><?php echo UserModule::t("Restore"); ?></h1>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<div class="form">
<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($form); ?>
	
	
		<?php echo CHtml::activeLabel($form,'login_or_email'); ?>
		<?php echo CHtml::activeTextField($form,'login_or_email') ?>
		<p class="hint"><?php echo UserModule::t("Please enter your login or email addres."); ?></p>
	
	
	
		<?php /* echo CHtml::submitButton(UserModule::t("Restore")); */
		$this->widget('bootstrap.widgets.TbButton', array(
					    'label'=>UserModule::t("Restore"),
					    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
					    'size'=>'small', // null, 'large', 'small' or 'mini'
		));?>
	

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<?php endif; ?>