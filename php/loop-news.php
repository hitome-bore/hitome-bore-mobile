<div class="newsarchive frame">
	<ul>
		<?php while(have_posts()): the_post(); ?>
		<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><time datetime="<?php the_time('Y-m-d¥TH:i:s+09:00'); ?>"><?php the_time("Y.m.d"); ?></time><?php the_title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
</div><!-- /.archive -->
