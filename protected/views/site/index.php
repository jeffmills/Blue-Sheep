<?php
$js_url = Yii::app()->request->baseUrl . "/js/sliders.js";

Yii::app()->clientScript->registerCoreScript('jquery');

$cs=Yii::app()->getClientScript();
$cs->registerScriptFile($js_url, 1);

?>

    <?php $this->renderPartial('home/bannerSlider'); ?>

        <div id="content_container" class="home">

            <div id="left_column">

                <h1>It's all about <span class="blue">you</span> at the <span class="blue">blue</span></h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet blandit
                    volutpat. Duis mollis elit in urna ornare placerat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Integer eu justo eget leo rhoncus cursus.</p>

                <p>Vestibulum risus est, imperdiet et placerat sit amet, semper quis est. Aenean ut
                    leo eu velit ultricies mollis. Praesent dapibus urna eu arcu fringilla quis posuere
                    libero ultricies. Duis tincidunt lectus in justo ultrices et ultrices nunc luctus.</p>

                <p>Duis nulla est, scelerisque convallis ultricies vitae, lobortis ac lorem.
                    Praesent id orci mi. Cras venenatis aliquet lacus.</p>

                <div id="faq_slider">

                    <div id="faq_viewport">

                        <ul>
                             <!-- quesitons grabbed from the faq table -->
                             <?php   foreach($question as $q){ ?>
                                <li><a href="#"><?php echo $q['question']; ?></a></li>
                             <?php } ?>

                        </ul>

                    </div>

                </div><!--End of faq_slider-->

                <h1 class="brands">Check out the <span class="blue">brands</span> we offer</h1>
                <span id="catalog_cta" class="blue">Click logos to view catalogs</span>

                <div class="clear"></div>

                <ul id="brand_logos">

                    <li><a href="http://www.fruitactivewear.com/Catalog.shtml"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fruit_o_loom.png" alt="fruit of the loom" /></a></li>
                    <li><a href="http://www.anvilknitwear.com/Product-Catalogs/What-s-New"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/anvil.png" alt="Anvil" /></a></li>
                    <li><a href="http://www.augustasportswear.com/webapp/wcs/stores/servlet/StoreCatalogDisplayView?storeId=10051&catalogId=10051&langId=-1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/augusta.png" alt="Augusta" /></a></li>
                    <li class="last_logo"><a href="http://www.hanes.com/Hanes/Default.aspx"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hanes.png" alt="Hanes" /></a></li>
                    <li><a href="http://www.bella.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bella.png" alt="Bella" /></a></li>
                    <li><a href="http://www.championusa.com/champion/Default.aspx"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/champion.png" alt="Champion" /></a></li>
                    <li><a href="http://gildan.com/distributors/catalog/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gildan.png" alt="Gildan" /></a></li>
                    <li class="last_logo"><a href="http://www.jerzees.com/Catalog.shtml"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/jerzees.png" alt="Jerzees" /></a></li>

                </ul>

            </div><!--End of left_column-->

            <?php $this->renderPartial('home/rightColumn'); ?>

            <div class="clear"></div>

        </div><!--End of content_container-->