<?php get_header(); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

<div id="main">
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<h2>News <?php the_title(); ?></h2>
<div id="news">
<dl>
<dt><?php the_date(); ?></dt>
<dd><?php the_content(); ?></dd>
</dl>
</div>
<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>
</div><!-- /#main -->

<?php else: ?><!-- /sp -->

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i>News</i>お知らせ</h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<?php endwhile; endif; ?>
<div id="container">
<div id="main_area">

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<article class="page">
<h1 class="title"><i>News</i><?php the_title(); ?></h1>
<div class="frame">
<p style="text-align: right; "><time><?php the_date(); ?></time></p>
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