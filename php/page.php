<?php get_header(); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

<div id="main">

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>


</div>
<?php else: ?><!-- /sp -->

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<!-- page.php -->
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i><?php echo get_post_meta($post->ID, 'title', true); ?></i><?php the_title(); ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<?php endwhile; endif; ?>
<div id="container">
<div id="main_area">

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<article class="page">
<div class="frame">
<?php the_content(); ?>
</div><!-- /.frame -->
</article><!-- /.page -->

<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>


</div><!-- /main_area -->
<?php get_sidebar(); ?>
</div><!-- /container -->
<?php endif; ?><!-- /PC -->
<?php get_footer(); ?>