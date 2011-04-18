<?php
$js_url = Yii::app()->request->baseUrl . "/js/faq.js";

Yii::app()->clientScript->registerCoreScript('jquery');

$cs=Yii::app()->getClientScript();
$cs->registerScriptFile($js_url, 1);

?>

<div id="content_container" class="<?php echo $this->id; ?>">

            <div id="left_column">

                <h1>Frequently Asked <span class="blue">Questions</span></h1>

                <?php
                foreach($faqs as $faq){ ?>
                
                <div class="faq_section">

                    <div class="faq_question first_faq_question">

                        <div class="faq_arrow <?php if(isset($_GET['answerid']) && $_GET['answerid'] == $faq['id']){?>faq_active<?php } ?>"></div>
                        <h2 name="#answer<?php echo $faq['id'];?>">Q. <?php echo $faq['question']; ?></h2>

                        <div class="clear"></div>

                    </div>

                    <div class="faq_answer <?php if(isset($_GET['answerid']) && $_GET['answerid'] == $faq['id']){?>answer_active<?php } ?>">

                        <?php echo $faq['answer']; ?>

                    </div>

                </div>

               <?php } ?>


            </div><!--End of left_column-->

            <?php $this->renderPartial('//site/home/rightColumn'); ?>

            <div class="clear"></div>

        </div><!--End of content_container-->
