<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);

$js_url = Yii::app()->request->baseUrl . "/js/contact.js";

Yii::app()->clientScript->registerCoreScript('jquery');

$cs=Yii::app()->getClientScript();
$cs->registerScriptFile($js_url, 1);

?>

 <div id="content_container" class="<?php echo $this->id; ?>" >

            <div id="left_column" class="contact">

            <h1><span class="blue">Contact</span> Us</h1>

                <?php if(Yii::app()->user->hasFlash('contact')): ?>

                <div class="flash-success">
                        <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>

                <?php else: ?>

                <div class="form">

                <?php $form=$this->beginWidget('CActiveForm'); ?>

                        <p class="note">Fields with <span class="required">*</span> are required.</p>

                        <?php echo $form->errorSummary($model); ?>

                        <div class="row">
                                <?php echo $form->labelEx($model,'name'); ?>
                                <?php echo $form->textField($model,'name'); ?>
                        </div>

                        <div class="row">
                                <?php echo $form->labelEx($model,'email'); ?>
                                <?php echo $form->textField($model,'email'); ?>
                        </div>

                        <div class="row">
                                <?php echo $form->labelEx($model,'phone'); ?>
                                <?php echo $form->textField($model,'phone'); ?>
                        </div>

                        <div class="row">
                                <?php echo $form->labelEx($model,'body'); ?>
                                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                        </div>

                        <?php if(CCaptcha::checkRequirements()): ?>
                        <div class="row">
                                <?php echo $form->labelEx($model,'verifyCode'); ?>
                                <div>
                                <?php $this->widget('CCaptcha'); ?>
                                <?php echo $form->textField($model,'verifyCode'); ?>
                                </div>
                                <div class="hint">Please enter the letters as they are shown in the image above.
                                <br/>Letters are not case-sensitive.</div>
                        </div>
                        <?php endif; ?>

                        <div class="row buttons">
                                <?php echo CHtml::submitButton('Submit'); ?>
                        </div>

                <?php $this->endWidget(); ?>

                </div><!-- form -->

                <?php endif; ?>

                <h1><span class="blue">Contact</span> Information</h1>

                <ul>

                    <li id="contact_phone">1-801-224-8328</li>
                    <li id="contact_email">BlueSheep@connect2.com</li>
                    <li id="contact_address">1378 West Center Street Orem, Utah 84057</li>

                </ul>

                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contact_facebook.png" alt="facebook"/></a>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contact_twitter.png" alt="twitter"/></a>

                </div><!--End of left_column-->

            <?php $this->renderPartial('//site/home/rightColumn'); ?>

            <div class="clear"></div>

        </div><!--End of content_container-->