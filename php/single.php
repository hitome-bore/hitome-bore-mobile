<?php get_header(); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
<div id="main">
	<h2>Photo Gallery - <?php the_title(); ?></h2>

<?php if(have_posts()): ?>
  <ul id="Gallery">
  <?php while(have_posts()): the_post(); ?>

    <?php $photo01 = get_post_meta($post->ID, 'photo01', true); if($photo01): ?>
		<li><a href="<?php $photo01url = wp_get_attachment_image_src($photo01, 'large'); echo $photo01url[0]; ?>">
			<img src="<?php $photo01thmb = wp_get_attachment_image_src($photo01, 'thumbnail'); echo $photo01thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo02 = get_post_meta($post->ID, 'photo02', true); if($photo02): ?>
		<li><a href="<?php $photo02url = wp_get_attachment_image_src($photo02, 'large'); echo $photo02url[0]; ?>">
			<img src="<?php $photo02thmb = wp_get_attachment_image_src($photo02, 'thumbnail'); echo $photo02thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo03 = get_post_meta($post->ID, 'photo03', true); if($photo03): ?>
		<li><a href="<?php $photo03url = wp_get_attachment_image_src($photo03, 'large'); echo $photo03url[0]; ?>">
			<img src="<?php $photo03thmb = wp_get_attachment_image_src($photo03, 'thumbnail'); echo $photo03thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo04 = get_post_meta($post->ID, 'photo04', true); if($photo04): ?>
		<li><a href="<?php $photo04url = wp_get_attachment_image_src($photo04, 'large'); echo $photo04url[0]; ?>">
			<img src="<?php $photo04thmb = wp_get_attachment_image_src($photo04, 'thumbnail'); echo $photo04thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo05 = get_post_meta($post->ID, 'photo05', true); if($photo05): ?>
		<li><a href="<?php $photo05url = wp_get_attachment_image_src($photo05, 'large'); echo $photo05url[0]; ?>">
			<img src="<?php $photo05thmb = wp_get_attachment_image_src($photo05, 'thumbnail'); echo $photo05thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo06 = get_post_meta($post->ID, 'photo06', true); if($photo06): ?>
		<li><a href="<?php $photo06url = wp_get_attachment_image_src($photo06, 'large'); echo $photo06url[0]; ?>">
			<img src="<?php $photo06thmb = wp_get_attachment_image_src($photo06, 'thumbnail'); echo $photo06thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo07 = get_post_meta($post->ID, 'photo07', true); if($photo07): ?>
		<li><a href="<?php $photo07url = wp_get_attachment_image_src($photo07, 'large'); echo $photo07url[0]; ?>">
			<img src="<?php $photo07thmb = wp_get_attachment_image_src($photo07, 'thumbnail'); echo $photo07thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo08 = get_post_meta($post->ID, 'photo08', true); if($photo08): ?>
		<li><a href="<?php $photo08url = wp_get_attachment_image_src($photo08, 'large'); echo $photo08url[0]; ?>">
			<img src="<?php $photo08thmb = wp_get_attachment_image_src($photo08, 'thumbnail'); echo $photo08thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo09 = get_post_meta($post->ID, 'photo09', true); if($photo09): ?>
		<li><a href="<?php $photo09url = wp_get_attachment_image_src($photo09, 'large'); echo $photo09url[0]; ?>">
			<img src="<?php $photo09thmb = wp_get_attachment_image_src($photo09, 'thumbnail'); echo $photo09thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo10 = get_post_meta($post->ID, 'photo10', true); if($photo10): ?>
		<li><a href="<?php $photo10url = wp_get_attachment_image_src($photo10, 'large'); echo $photo10url[0]; ?>">
			<img src="<?php $photo10thmb = wp_get_attachment_image_src($photo10, 'thumbnail'); echo $photo10thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo11 = get_post_meta($post->ID, 'photo11', true); if($photo11): ?>
		<li><a href="<?php $photo11url = wp_get_attachment_image_src($photo11, 'large'); echo $photo11url[0]; ?>">
			<img src="<?php $photo11thmb = wp_get_attachment_image_src($photo11, 'thumbnail'); echo $photo11thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo12 = get_post_meta($post->ID, 'photo12', true); if($photo12): ?>
		<li><a href="<?php $photo12url = wp_get_attachment_image_src($photo12, 'large'); echo $photo12url[0]; ?>">
			<img src="<?php $photo12thmb = wp_get_attachment_image_src($photo12, 'thumbnail'); echo $photo12thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo13 = get_post_meta($post->ID, 'photo13', true); if($photo13): ?>
		<li><a href="<?php $photo13url = wp_get_attachment_image_src($photo13, 'large'); echo $photo13url[0]; ?>">
			<img src="<?php $photo13thmb = wp_get_attachment_image_src($photo13, 'thumbnail'); echo $photo13thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo14 = get_post_meta($post->ID, 'photo14', true); if($photo14): ?>
		<li><a href="<?php $photo14url = wp_get_attachment_image_src($photo14, 'large'); echo $photo14url[0]; ?>">
			<img src="<?php $photo14thmb = wp_get_attachment_image_src($photo14, 'thumbnail'); echo $photo14thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo15 = get_post_meta($post->ID, 'photo15', true); if($photo15): ?>
		<li><a href="<?php $photo15url = wp_get_attachment_image_src($photo15, 'large'); echo $photo15url[0]; ?>">
			<img src="<?php $photo15thmb = wp_get_attachment_image_src($photo15, 'thumbnail'); echo $photo15thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo16 = get_post_meta($post->ID, 'photo16', true); if($photo16): ?>
		<li><a href="<?php $photo16url = wp_get_attachment_image_src($photo16, 'large'); echo $photo16url[0]; ?>">
			<img src="<?php $photo16thmb = wp_get_attachment_image_src($photo16, 'thumbnail'); echo $photo16thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo17 = get_post_meta($post->ID, 'photo17', true); if($photo17): ?>
		<li><a href="<?php $photo17url = wp_get_attachment_image_src($photo17, 'large'); echo $photo17url[0]; ?>">
			<img src="<?php $photo17thmb = wp_get_attachment_image_src($photo17, 'thumbnail'); echo $photo17thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo18 = get_post_meta($post->ID, 'photo18', true); if($photo18): ?>
		<li><a href="<?php $photo18url = wp_get_attachment_image_src($photo18, 'large'); echo $photo18url[0]; ?>">
			<img src="<?php $photo18thmb = wp_get_attachment_image_src($photo18, 'thumbnail'); echo $photo18thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo19 = get_post_meta($post->ID, 'photo19', true); if($photo19): ?>
		<li><a href="<?php $photo19url = wp_get_attachment_image_src($photo19, 'large'); echo $photo19url[0]; ?>">
			<img src="<?php $photo19thmb = wp_get_attachment_image_src($photo19, 'thumbnail'); echo $photo19thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

    <?php $photo20 = get_post_meta($post->ID, 'photo20', true); if($photo20): ?>
		<li><a href="<?php $photo20url = wp_get_attachment_image_src($photo20, 'large'); echo $photo20url[0]; ?>">
			<img src="<?php $photo20thmb = wp_get_attachment_image_src($photo20, 'thumbnail'); echo $photo20thmb[0]; ?>" alt="">
		</a></li>
    <?php endif; ?>

  <?php endwhile; ?>
	</ul>


<?php $content = get_the_content(); ?>

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
'post_type'			=> array('model'),
'post__not_in'		=> array($post->ID),
'tag__in'			=> str_replace($tag_out,null,$tagIDs),
'posts_per_page'	=> -1,
);
$my_query = new WP_Query($args); ?>
	<h2>Model Infomation</h2>
<?php while($my_query->have_posts()): $my_query->the_post(); ?>
	<div id="profile">
		<div id="wrapper">
			<div id="thumb">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/no_img.png" alt="<?php the_title(); ?>">
<?php endif; ?>
			</div>
			<div id="info">
				<dl>
<dt>名前</dt>
<dd><?php the_title(); ?></dd>
<?php if(get_post_meta($post->ID,'height',true)): ?>
<dt>身長</dt>
<dd><?php echo get_post_meta($post->ID,'height',true); ?>cm</dd>
<?php endif; ?>i
<?php if(get_post_meta($post->ID,'blood',true)): ?>
<dt>血液型</dt>
<dd><?php echo get_post_meta($post->ID,'blood',true); ?>型</dd>
<?php endif; ?>
				</dl>
			</div>
		</div>
		<p><?php echo $content; ?></p>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>のプロフィール"><?php the_title(); ?>のプロフィールを見る</a>
	</div>

<?php endwhile; wp_reset_query(); ?>

	<script type="text/javascript">
// photo swipe
$(document).ready(function(){
	var gallery = $('#Gallery');
	var galleryList = gallery.children('li');
	var myPhotoSwipe = gallery.find('a').photoSwipe({ enableMouseWheel: true , enableKeyboard: false });

	function changeGalleryHeight() {
		var photoCount = galleryList.length;
		var photoHeight = galleryList.height();
		var photoWidth = galleryList.width();
		var photoRows = photoCount / 2;
		if ((galleryList.length % 2) === 1) {
			photoRows = photoRows - 0.5 + 1;
		}
		gallery.css('height', photoRows * photoHeight);
	}
	if ((galleryList.length % 2) === 1) {
		// TODO change the image later.
		gallery.append('<li><img src="./img/no_img.png"></li>');
	}
	changeGalleryHeight();
	$(window).resize(function() {
		changeGalleryHeight();
	});
});


	</script>

<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>

</div>
<?php else: ?><!-- /sp -->



<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i>Photo gallery</i><?php the_title(); ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<?php endwhile; endif; ?>
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

<?php $content = get_the_content(); ?>

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
'post_type'			=> array('model'),
'post__not_in'		=> array($post->ID),
'tag__in'			=> str_replace($tag_out,null,$tagIDs),
'posts_per_page'	=> -1,
);
$my_query = new WP_Query($args); ?>

<?php if($my_query->have_posts()): ?>

<article class="archive">
<h1 class="title"><i>Model infomation</i><?php the_title(); ?>のプロフィール</h1>
<?php while($my_query->have_posts()): $my_query->the_post(); ?>

<div class="frame">
<?php if($content): ?><div class="content"><?php echo $content; ?></div><?php endif; ?>
<div class="img"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</a></div>
<div class="info">
<dl class="interview">
<dt>名前</dt>
<dd><?php the_title(); ?></dd>
<?php if(get_post_meta($post->ID,'height',true)): ?>
<dt>身長</dt>
<dd><?php echo get_post_meta($post->ID,'height',true); ?>cm</dd>
<?php endif; ?>i
<?php if(get_post_meta($post->ID,'blood',true)): ?>
<dt>血液型</dt>
<dd><?php echo get_post_meta($post->ID,'blood',true); ?>型</dd>
<?php endif; ?>
</dl>
<div class="more"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>のプロフィール"><?php the_title(); ?>のプロフィールを見る</a></div>
</div>
</div><!-- /.frame -->

<?php endwhile; wp_reset_query(); ?>

</article><!-- /.archive -->
<?php endif; } ?>


<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>

</div><!-- /main_area -->
<?php get_sidebar(); ?>
</div><!-- /container -->
<?php endif; ?><!-- /PC -->
<?php get_footer(); ?>