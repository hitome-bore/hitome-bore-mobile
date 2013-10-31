<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
		<h2>gallery</h2>
		<ul id="photo-list">
<?php while(have_posts()): the_post(); ?>
			<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
	<div class="filter"><h3><?php the_title(); ?></h3></div>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>"><div class="filter"><h3><?php the_title(); ?></h3></div>
<?php endif; ?>
			</a></li>
<?php endwhile; ?>
		</ul>
<?php else: ?><!-- /sp -->
<div class="archive">
<?php $count = 1; while(have_posts()): the_post(); ?>
<article class="photo<?php if($count % 3 == 0): echo " last"; endif; ?>">
<div class="img"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</article>
<?php $count++; endwhile; ?>
</div><!-- /.archive loop-archive.php -->
<?php endif; ?><!-- /PC -->
