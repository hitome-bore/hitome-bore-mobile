<?php $collabo = get_posts('post_type=collabo&post_status=publish&posts_per_page=9&orderby=date&order=DESC'); ?>
<!-- loop-collabo.php -->
<section class="archive">
<h1 class="title"><i>New collabo</i>最新のコラボ</h1>
<?php $count = 1; foreach($collabo as $post): start_wp(); ?>
<article class="photo<?php if($count % 3 == 0): echo " last"; endif; ?>">
<div class="img"><a href="<?php the_permalink() ?>" title="眼帯美人「<?php the_title(); ?>」のプロフィール">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<h1><a href="<?php the_permalink() ?>" title="眼帯美人「<?php the_title(); ?>」のプロフィール"><?php the_title(); ?></a></h1>
</article>
<?php $count++; endforeach; ?>
</section><!-- /.archive -->
