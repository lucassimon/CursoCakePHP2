<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="pt-BR"> <!--<![endif]-->
<head>	
	
	<?php echo $this->Html->meta('icon') ?>

	<?php echo $this->Html->meta('description', Configure::read('Meta.description')) . PHP_EOL ?>

	<?php echo $this->Html->meta('author', Configure::read('Meta.author')) . PHP_EOL ?>

	<?php echo $this->Html->meta('keywords', Configure::read('Meta.keywords')) . PHP_EOL ?>

	<?php echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex,nofollow')); ?>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

  	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       	Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       	For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
 	
	<?php echo $this->Html->script('libs/modernizr-2.0.6.min.js') . PHP_EOL ?>
	
	<?php
		
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style','bootstrap.min'));

		echo $scripts_for_layout;
	?>
</head>
<body class="decara">
	
		<div id="header">
			<?php echo $this->element('/layout/header'); ?>
		</div>
		<div id="content" role="main">
			<div class="container">
				<?php echo $this->Session->flash(); ?>
	
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	
	<?php if (Configure::read('debug') == 2) echo $this->element('sql_dump') ?>


	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


	<!-- scripts concatenated and minified via ant build script-->
	<script defer src="js/plugins.js"></script>
	<script defer src="js/script.js"></script>
	<!-- end scripts-->

	
	<!-- Change UA-XXXXX-X to be your site's ID -->
	<script>
	  window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	  Modernizr.load({
	    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	  });
	</script>


	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	<script type="text/javascript">

		$(document).ready(function () { $("#topbar-container").dropdown(); }); $("body").bind("click", function (e) { $('.dropdown-toggle, .menu').parent("li").removeClass("open"); }); $(".dropdown-toggle, .menu").click(function (e) { var $li = $(this).parent("li").toggleClass('open'); return false; });

		
	</script>
</body>
</html>
