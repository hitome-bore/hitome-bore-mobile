<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
	<h2>News</h2>
	<ul class="news">
		<?php while(have_posts()): the_post(); ?>
		<li><div class="newsrow">
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_time("Y.m.d"); ?> <?php the_title(); ?></a><span>＞</span>
		</div></li>
		<?php endwhile; ?>
	</ul>
<?php else: ?><!-- /sp -->

<div class="newsarchive frame">
	<ul>
		<?php while(have_posts()): the_post(); ?>
		<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><time datetime="<?php the_time('Y-m-d¥TH:i:s+09:00'); ?>"><?php the_time("Y.m.d"); ?></time><?php the_title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
</div><!-- /.archive -->
<?php endif; ?><!-- /PC -->
