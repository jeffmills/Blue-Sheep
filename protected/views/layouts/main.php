<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div id="header_container">

            <div id="header">

                <div id="header_content">

                    <p id="phone_num">1-801-224-8328</p>

                    <a id="fbook_header" href="http://www.facebook.com/pages/Blue-Sheep/170049359681678"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook_sml.png" alt="facebook link" /></a>
                    <a id="twitter_header" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter_sml.png" alt="twitter link" /></a>

                </div>

            </div>

        </div><!--end of header_container-->

        <div id="nav_container">

            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="blue sheep screen printing" /></a>

            <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'home', 'url'=>array('/site/index')),
				array('label'=>'about', 'url'=>array('/about/index')),
				array('label'=>'services', 'url'=>array('/site/services')),
				array('label'=>'blog', 'url'=>array('/site/blog')),
				array('label'=>'faq', 'url'=>array('/site/faq')),
                                array('label'=>'contact', 'url'=>array('/site/contact'))
			),
                        'lastItemCssClass' => 'last_nav'
		)); ?>

            <div class="clear"></div>

        </div><!--end of nav_container-->

	<?php echo $content; ?>

	<div id="footer_container">

            <div id="footer">

                <div class="footer_section first">

                    <h1>Catalogs</h1>

                    <ul>

                        <li><a href="#">Fruit of the Loom</a></li>
                        <li><a href="#">Anvil</a></li>
                        <li><a href="#">Augusta</a></li>
                        <li><a href="#">Hanes</a></li>
                        <li><a href="#">Bella</a></li>
                        <li><a href="#">Champion</a></li>
                        <li><a href="#">Gildan</a></li>
                        <li><a href="#">Jerzees</a></li>

                    </ul>

                </div>

                <div class="footer_section">

                    <h1>Site</h1>

                    <ul>

                        <li><a href="#">Products</a></li>
                        <li><a href="#">Our Portfolio</a></li>
                        <li><a href="#">Get A Free Online Quote</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Job Openings</a></li>


                    </ul>

                </div>

                <div class="footer_section">

                    <h1>Social</h1>

                    <p>Be the first to hear about new specials!</p>

                    <a href="http://www.facebook.com/pages/Blue-Sheep/170049359681678"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook_footer.png" alt="facebook" /></a>

                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter_footer.png" alt="twitter" /></a>

                </div>

                <div class="footer_section last">

                    <h1>Contact</h1>

                    <h2>1-801-224-8328</h2>

                    <h3>BlueSheep@connect2.com</h3>

                    <h3>1378 West Center Street Orem, Utah 84057</h3>

                </div>

            </div>

        </div>

        <div id="footer_bottom_container">

            <div id="footer_bottom">

                    &copy Copyright <?php echo date('Y'); ?> Blue Sheep Inc. All rights reserved.

            </div>

        </div>


</body>
</html>