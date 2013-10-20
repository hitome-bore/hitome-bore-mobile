<?php get_header(); ?>
<!-- 月別date -->
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1 class="title"><i><?php if(!get_query_var('year') == 0): echo get_query_var('year'); endif; if(!get_query_var('monthnum') == 0): echo ".". get_query_var('monthnum'); endif; if(!get_query_var('day') == 0): echo ".". get_query_var('day'); endif; ?></i><?php if(!get_query_var('year') == 0): echo get_query_var('year'). "年"; endif; if(!get_query_var('monthnum') == 0): echo get_query_var('monthnum'). "月"; endif; if(!get_query_var('day') == 0): echo get_query_var('day'). "日"; endif; ?>の眼帯美人<?php if(is_paged()): ?>（<?php echo get_query_var('paged'); ?>ページ目）<?php endif; ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<div id="container">
<div id="main_area">


<?php get_template_part('loop', 'date'); ?>

</div><!-- /#main_area -->
<?php get_sidebar(); ?>
</div><!-- /#container -->
<?php get_footer(); ?>