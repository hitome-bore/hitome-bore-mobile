<?php get_template_part('shared/php/discription'); ?>
<body>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
	<div id="menu">
		<ul>
			<li><a href="/"><div class="list">Home</div></a></li>
			<li><a href="/gallery/"><div class="list">Gallery</div></a></li>
			<li><a href="/collabo/"><div class="list">Collabo</div></a></li>
			<li><a href="/model/"><div class="list">Model</div></a></li>
			<li><a href="/news/"><div class="list">News</div></a></li>
			<li><a href="/about/"><div class="list">About us</div></a></li>
			<li><a href="/contact/"><div class="list">Contact</div></a></li>
			<li><a href="/privacy/"><div class="list">Privacy Policy</div></a></li>
			<li><a href="/entry/"><div class="list">利用規約</div></a></li>
		</ul>
	</div>
	<script type="text/javascript">$('#menu').hide();</script>
	<header id="header">
		<div id="logo"><h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/hitomebore_logo.png" alt="logo" width="202" height="42"></a></h1></div>
		<div id="menu_button">Menu<img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-dropdown.png"></div>
	</header>
<?php else: ?><!-- /sp -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header id="header"><div class="inner<?php if(!is_home()): ?> small<?php endif; ?>">
<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo<?php if(!is_home()): ?>_s<?php endif; ?>.png" alt="<?php bloginfo('name'); ?>"></a></h1>
<?php wp_nav_menu(array('menu' => 'header')); ?>
</div></header><!-- /#header -->
<?php endif; ?><!-- /PC -->
