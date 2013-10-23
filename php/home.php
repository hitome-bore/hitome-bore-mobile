<?php get_header(); ?>
<!-- TOP -->
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

	<div id="main">
		<!--slide-box-->
		<div class="flexslider">
			<ul class="slides">
<?php $photo = get_posts('post_type=top&post_status=publish&posts_per_page=4&orderby=date&order=DESC'); ?>
<?php foreach($photo as $post): start_wp(); ?>
				<li data-thumb="./img/top/nakazato_lisa091-1000x665.jpg">
					<a href="<?php echo get_post_meta($post->ID,'top_url', true); ?>" title="眼帯美人「<?php the_title(); ?>」のギャラリー">
						<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'top', true), 'large'); ?>
					</a>
				</li>
<?php endforeach; ?>
			</ul>
			<script type="text/javascript">
				var topimg = $('.slides img');
				topimg.attr('class', 'photo');
				topimg.removeAttr('width');
				topimg.removeAttr('height');
			</script>
		</div>
		<!--/slide-box-->
		<h2>News</h2>
		<ul class="news">
<?php $news = get_posts('post_type=news&post_status=publish&posts_per_page=3&orderby=date&order=DESC'); ?>
<?php foreach($news as $post): start_wp(); ?>
			<li><div class="newsrow">
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_time("Y.m.d"); ?> <?php the_title(); ?></a><span>＞</span>
			</div></li>
<?php endforeach; ?>
		</ul>
		<a class="viewAll" href="/news/"><div>view all news</div></a>
		<h2>Main Menu</h2>
		<a class="mainMenu" href="/gallery/"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/thumb/nakazato_lisa031-210x139.jpg"><h3>Gallery</h3></a>
		<a class="mainMenu" href="/collabo/"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/thumb/kurumi_nishijima01-210x139.jpg"><h3>Collabo</h3></a>
	</div><!-- main -->

<?php get_footer(); ?>
<?php else: ?><!-- /sp -->

<div class="wideslider">
<ul>
<?php $photo = get_posts('post_type=top&post_status=publish&posts_per_page=7&orderby=date&order=DESC'); ?>
<?php foreach($photo as $post): start_wp(); ?>
<li><a href="<?php echo get_post_meta($post->ID,'top_url', true); ?>" title="眼帯美人「<?php the_title(); ?>」のギャラリー"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'top', true), 'large'); ?></a></li>
<?php endforeach; ?>
</ul>
</div><!-- /#slider -->

<div id="container">
<div id="main_area">

<?php get_template_part('loop', 'single'); ?>
<div class="btn"><a Href="http://hitome-bore.com/gallery/"style="display: block;text-align: center;">すべての写真を見る</a></div>
<?php get_template_part('loop', 'collabo'); ?>
<div class="btn"><a Href="http://hitome-bore.com/collabo/"style="display: block;text-align: center;">すべてのコラボを見る</a></div>
<?php get_template_part('loop', 'model'); ?>
<div class="btn"><a Href="http://hitome-bore.com/model/"style="display: block;text-align: center;">すべての片目惚れを見る</a></div>
</div><!-- /#main_area -->
<?php get_sidebar(); ?>
</div><!-- /#container -->
<?php get_footer(); ?>

<style>
.btn {
text-align:center;
font-size:large;
border: 1px solid #ccc;
padding: 6px;margin: 4px 20px 10px;
background-color: #D3D3D3;
display: block;
/* border-radius: 8px; */
}
</style>
<?php endif; ?><!-- /PC -->
