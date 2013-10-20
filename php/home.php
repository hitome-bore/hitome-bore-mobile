<?php get_header(); ?>
<!-- TOP -->
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