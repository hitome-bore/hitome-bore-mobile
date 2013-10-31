<?php
$original_post	= $post;
$tags			= wp_get_post_tags($post->ID);
$tagIDs			= array();
if ($tags){
$tagcount = count($tags);
for ($i = 0; $i < $tagcount; $i++) {
$tagIDs[$i] = $tags[$i]->term_id;
}
$args = array(
'post_type'			=> array('post'),
'post__not_in'		=> array($post->ID),
'tag__in'			=> str_replace($tag_out,null,$tagIDs),
'posts_per_page'	=> -1,
);
$my_query = new WP_Query($args); ?>
<?php if($my_query->have_posts()): ?>


<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

	<ul class="photo-list">

<?php while($my_query->have_posts()): $my_query->the_post(); ?>

		<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): // サムネイル画像がある場合 ?>
<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
			<div class="filter">
				<h3><?php the_title(); ?></h3>
				<p><?php the_time("Y年m月d日"); ?></p>
			</div>
		</a></li>

<?php endwhile; wp_reset_query(); ?>
	</ul>

<?php else: ?><!-- /sp -->


<section class="archive">
<h1 class="title"><i>History</i><?php the_title(); ?>の出演履歴</h1>
<?php while($my_query->have_posts()): $my_query->the_post(); ?>
<article class="photo<?php if($count % 3 == 0): echo " last"; endif; ?>">
<div class="img"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $count = 1; $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): // サムネイル画像がある場合 ?>
<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_time("Y年m月d日"); ?> <?php the_title(); ?></a></h1>
</article>
<?php $count++; endwhile; wp_reset_query(); ?>
</section><!-- /.archive -->


<?php endif; ?><!-- /PC -->

<?php endif; } ?>