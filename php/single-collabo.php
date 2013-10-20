<?php get_header(); ?>
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i>Model infomation</i><?php the_title(); ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<?php endwhile;
endif; ?>


<div id="container">
<div id="main_area">

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

<div id="main_view">
<?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo01url = wp_get_attachment_image_src($photo01, 'large'); echo $photo01url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo01, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo01, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo02 = get_post_meta($post->ID, 'photo02', true); if($photo02): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo02url = wp_get_attachment_image_src($photo02, 'large'); echo $photo02url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo02, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo02, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo03 = get_post_meta($post->ID, 'photo03', true); if($photo01): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo03url = wp_get_attachment_image_src($photo03, 'large'); echo $photo03url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo03, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo03, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo04 = get_post_meta($post->ID, 'photo04', true); if($photo04): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo04url = wp_get_attachment_image_src($photo04, 'large'); echo $photo04url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo04, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo04, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo05 = get_post_meta($post->ID, 'photo05', true); if($photo05): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo05url = wp_get_attachment_image_src($photo05, 'large'); echo $photo05url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo05, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo05, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo06 = get_post_meta($post->ID, 'photo06', true); if($photo06): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo06url = wp_get_attachment_image_src($photo06, 'large'); echo $photo06url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo06, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo06, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo07 = get_post_meta($post->ID, 'photo07', true); if($photo07): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo07url = wp_get_attachment_image_src($photo07, 'large'); echo $photo07url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo07, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo07, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo08 = get_post_meta($post->ID, 'photo08', true); if($photo08): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo08url = wp_get_attachment_image_src($photo08, 'large'); echo $photo08url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo08, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo08, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo09 = get_post_meta($post->ID, 'photo09', true); if($photo09): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo09url = wp_get_attachment_image_src($photo09, 'large'); echo $photo09url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo09, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo09, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo10 = get_post_meta($post->ID, 'photo10', true); if($photo10): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo10url = wp_get_attachment_image_src($photo10, 'large'); echo $photo10url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo10, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo10, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo11 = get_post_meta($post->ID, 'photo11', true); if($photo11): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo11url = wp_get_attachment_image_src($photo11, 'large'); echo $photo11url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo11, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo11, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo12 = get_post_meta($post->ID, 'photo12', true); if($photo12): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo12url = wp_get_attachment_image_src($photo12, 'large'); echo $photo12url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo12, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo12, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo13 = get_post_meta($post->ID, 'photo13', true); if($photo11): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo13url = wp_get_attachment_image_src($photo13, 'large'); echo $photo13url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo13, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo13, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo14 = get_post_meta($post->ID, 'photo14', true); if($photo14): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo14url = wp_get_attachment_image_src($photo14, 'large'); echo $photo14url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo14, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo14, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo15 = get_post_meta($post->ID, 'photo15', true); if($photo15): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo15url = wp_get_attachment_image_src($photo15, 'large'); echo $photo15url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo15, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo15, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo16 = get_post_meta($post->ID, 'photo16', true); if($photo16): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo16url = wp_get_attachment_image_src($photo16, 'large'); echo $photo16url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo16, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo16, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo17 = get_post_meta($post->ID, 'photo17', true); if($photo17): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo17url = wp_get_attachment_image_src($photo17, 'large'); echo $photo17url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo17, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo17, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo18 = get_post_meta($post->ID, 'photo18', true); if($photo18): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo18url = wp_get_attachment_image_src($photo18, 'large'); echo $photo18url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo18, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo18, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo19 = get_post_meta($post->ID, 'photo19', true); if($photo19): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo19url = wp_get_attachment_image_src($photo19, 'large'); echo $photo19url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo19, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo19, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

<?php $photo20 = get_post_meta($post->ID, 'photo20', true); if($photo20): ?>
<div class="showcase-slide">
	<div class="showcase-content">
		<a class="photo" href="<?php $photo20url = wp_get_attachment_image_src($photo20, 'large'); echo $photo20url[0]; ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image($photo20, 'medium'); ?></a>
	</div>
	<div class="showcase-thumbnail">
		<?php echo wp_get_attachment_image($photo10, 'thumbnail'); ?>
	</div>
</div><!-- /#showcase-slide -->
<?php endif; ?>

</div><!-- /#main_view -->

<article class="archive">
<h1 class="title"><i>Collabo infomation</i><?php the_title(); ?>のコラボ情報</h1>
<div class="frame">
<?php if($post->post_content): ?><div class="content"><?php echo $post->post_content; ?></div><?php endif; ?>
<div class="img"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<div class="info">
<dl class="interview">
<?php if(get_post_meta($post->ID,'shop_name',true)): ?>
<dt>店舗名</dt>
<dd><?php echo get_post_meta($post->ID,'shop_name',true); ?></dd>
<?php endif; ?>


<?php if(get_post_meta($post->ID,'shop_url',true)):

$shopUrl = get_post_meta($post->ID,'shop_url',true);

?>
<dt>店舗URL</dt>
<dd><a href="<?php echo $shopUrl; ?>" target="_blank"><?php echo $shopUrl; ?></a></dd>
<?php endif; ?>


<?php if(get_post_meta($post->ID,'shop_info',true)):

$shopInfo = get_post_meta($post->ID,'shop_info',true);

?>
<dt>お店の一言</dt>
<dd><?php echo $shopInfo; ?></dd>
<?php endif; ?>


</dl>
<div class="more"><a href="<?php echo get_post_meta($post->ID,'model_url',true); ?>" title="<?php echo get_post_meta($post->ID,'model_name',true); ?>のプロフィール"><?php echo get_post_meta($post->ID,'model_name',true); ?>のプロフィールを見る</a></div>
</div>
</div><!-- /.frame -->

</article>

<!--

<?php /*if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>


<?php if(get_post_meta($post->ID,'notice',true)): ?><div class="content"><?php echo get_post_meta($post->ID,'notice',true); ?></div><?php endif; ?>


<?php endwhile; endif*/ ?>

-->


  <?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>

</div><!-- /main_area -->
<?php get_sidebar(); ?>
</div><!-- /container -->
<?php get_footer(); ?>
