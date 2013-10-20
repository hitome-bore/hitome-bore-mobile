<?php query_posts('post_type=post&post_status=publish&posts_per_page=9&order=DESC&orderby=date'); if(have_posts()): ?>
<section class="archive">
<!-- loop-single.php TOPの最新写真 -->
<h1 class="title"><i>New photo</i>最新の写真</h1>
<?php $count = 1; while(have_posts()): the_post(); ?>
<article class="photo<?php if($count % 3 == 0): echo " last"; endif; ?>">
<div class="img"><a href="<?php the_permalink() ?>" title="眼帯美人「<?php the_title(); ?>」のギャラリー">
<?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): // サムネイル画像がある場合 ?>
<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<h1><a href="<?php the_permalink() ?>" title="眼帯美人「<?php the_title(); ?>」のギャラリー"><?php the_time("Y年m月d日"); ?> <?php the_title(); ?></a></h1>
</article>
<?php $count++; endwhile; ?>
</section><!-- /.archive -->
<?php endif; wp_reset_query(); ?>
