<?php get_header(); ?>
<!-- /news -->
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
<div id="main">
<?php get_template_part('loop', 'news'); ?>
</div>
<?php else: ?><!-- /sp -->

<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i><?php $archive = get_post_type_object($post->post_type); echo ucfirst($archive->name); ?></i><?php echo $archive->labels->name; ?><?php if(is_paged()): ?> <?php echo get_query_var('paged'); ?>ページ目<?php endif; ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<div id="container">
<div id="main_area">

<?php get_template_part('loop', 'news'); ?>

</div><!-- /#main_area -->
<?php get_sidebar(); ?>
</div><!-- /#container -->
<?php endif; ?><!-- /PC -->
<?php get_footer(); ?>