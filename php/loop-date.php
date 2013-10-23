<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

<?php $count = 1; while(have_posts()): the_post(); ?>
	<h2>gallery</h2>
	<ul class="photo-list">
		<li>
<?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): // サムネイル画像がある場合 ?>
<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><div class="filter"><h3><?php the_title(); ?></h3><p><?php the_time("Y年m月d日"); ?></p></div></a>
		</li>
	</ul>

<?php $count++; endwhile; wp_reset_query(); ?>

<?php else: ?><!-- /sp -->

<section class="archive">
<!-- loop-date.php -->
<?php $count = 1; while(have_posts()): the_post(); ?>
	<article class="photo<?php if($count % 3 == 0): echo " last"; endif; ?>">
		<div class="img"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): // サムネイル画像がある場合 ?>
<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
		</a></div>
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_time("Y年m月d日"); ?> <?php the_title(); ?></a></h1>
	</article>
<?php $count++; endwhile; wp_reset_query(); ?>
</section><!-- /.archive -->
<?php endif; ?><!-- /PC -->
