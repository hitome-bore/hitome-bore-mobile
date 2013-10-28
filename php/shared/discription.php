<!DOCTYPE html>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="./css/main.css" type="text/css">
	<link rel="stylesheet" href="./css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="./css/photoswipe.css" type="text/css">
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script src="./js/lib/jquery.flexslider.min.js" type="text/javascript"></script>
	<script src="./js/lib/klass.min.js" type="text/javascript"></script>
	<script src="./js/lib/code.photoswipe-3.0.5.min.js" type="text/javascript"></script>
	<script src="./js/main.min.js" type="text/javascript"></script>
<?php else: ?><!-- /sp -->
<html lang="ja" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php get_template_part('shared/php/discription/js'); ?>
	<?php get_template_part('shared/php/discription/css'); ?>
	<?php wp_head(); ?>
<?php endif; ?><!-- /PC -->
<title><?php get_template_part('shared/php/discription/title'); ?></title>
<meta name="description" content="<?php get_template_part('shared/php/discription/discription'); ?>">
<meta name="keywords" content="<?php get_template_part('shared/php/discription/keywords'); ?>">
<?php get_template_part('shared/php/discription/ogp'); ?>
<link href="<?php echo get_template_directory_uri(); ?>/shared/img/favicon.ico" rel="icon" type="image/png">
<link href="<?php echo get_template_directory_uri(); ?>/shared/img/favicon.ico" rel="shortcut icon">
<!-- analyticsは全UAで出す -->
<?php get_template_part('shared/php/analytics'); ?>
</head>