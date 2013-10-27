<?php get_header(); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>

<div id="main">
	<h2>Model Infomation</h2>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

	<div class="cover">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/no_img.png" alt="<?php the_title(); ?>">
<?php endif; ?>
		<div id="filter">
			<h3><?php the_title(); ?></h3>
<?php if(get_post_meta($post->ID,'name_ja',true)): ?>
			<span><?php echo get_post_meta($post->ID,'name_ja',true); ?></span>
<?php endif; ?>
		</div>
	</div>

	<div id="modelinfo">
	<h3>Model data</h3>
	<dl class="interview">
<?php if(get_post_meta($post->ID,'job_ja',true)): ?>
<dt>職業</dt>
<dd><?php echo get_post_meta($post->ID,'job_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'blood',true)): ?>
<dt>血液型</dt>
<dd><?php echo get_post_meta($post->ID,'blood',true); ?>型</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh01',true) or get_post_meta($post->ID,'bwh02',true) or get_post_meta($post->ID,'bwh03',true)): ?>
<dt>スリーサイズ</dt>
<dd>
<?php if(get_post_meta($post->ID,'bwh01',true)): ?><?php echo get_post_meta($post->ID,'bwh01',true); ?><?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh02',true)): ?><?php echo get_post_meta($post->ID,'bwh02',true); ?><?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh03',true)): ?><?php echo get_post_meta($post->ID,'bwh03',true); ?><?php endif; ?>
</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'birthplace',true)): ?>
<dt>出身地</dt>
<dd><?php echo get_post_meta($post->ID,'birthplace',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'constellation',true)): ?>
<dt>星座</dt>
<dd><?php echo get_post_meta($post->ID,'constellation',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'height',true)): ?>
<dt>身長</dt>
<dd><?php echo get_post_meta($post->ID,'height',true); ?>cm</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'hobby_ja',true)): ?>
<dt>趣味</dt>
<dd><?php echo get_post_meta($post->ID,'hobby_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'skill_ja',true)): ?>
<dt>特技</dt>
<dd><?php echo get_post_meta($post->ID,'skill_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'point_ja',true)): ?>
<dt>チャームポイント</dt>
<dd><?php echo get_post_meta($post->ID,'point_ja',true); ?></dd>
<?php endif; ?>
	</dl>
	<h3>Model interview</h3>
	<dl class="interview">

<?php if(get_post_meta($post->ID,'boom_ja',true)): ?>
<dt>マイブームを教えてください。</dt>
<dd><?php echo get_post_meta($post->ID,'boom_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'like_ja',true)): ?>
<dt>眼帯をした好きな人、キャラクターはいますか？</dt>
<dd><?php echo get_post_meta($post->ID,'like_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'holiday_ja',true)): ?>
<dt>お休みの日は何をしてますか？</dt>
<dd><?php echo get_post_meta($post->ID,'holiday_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'want_ja',true)): ?>
<dt>夢はなんですか？</dt>
<dd><?php echo get_post_meta($post->ID,'dream_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'dream_ja',true)): ?>
<dt>今欲しいものは何ですか？</dt>
<dd><?php echo get_post_meta($post->ID,'want_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'want_ja',true)): ?>
<dt>憧れの女性有名人は？</dt>
<dd><?php echo get_post_meta($post->ID,'longing_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'shop_ja',true)): ?>
<dt>最近行きつけのお店は？</dt>
<dd><?php echo get_post_meta($post->ID,'shop_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'infesting_ja',true)): ?>
<dt>出没ポイント（町）はどこですか？</dt>
<dd><?php echo get_post_meta($post->ID,'infesting_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'confessions_ja',true)): ?>
<dt>告白されるならどんなシチュエーションが理想ですか？</dt>
<dd><?php echo get_post_meta($post->ID,'confessions_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'men_ja',true)): ?>
<dt>好みの男性のタイプは？</dt>
<dd><?php echo get_post_meta($post->ID,'men_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'preference_ja',true)): ?>
<dt>タイプの異性タレント・著名人を教えてください。</dt>
<dd><?php echo get_post_meta($post->ID,'preference_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'gift_ja',true)): ?>
<dt>今一番恋人からもらいたいものは何？</dt>
<dd><?php echo get_post_meta($post->ID,'gift_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'location_ja',true)): ?>
<dt>デートで連れて行ってほしい場所は？</dt>
<dd><?php echo get_post_meta($post->ID,'location_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'fetish_ja',true)): ?>
<dt>男性へのフェチはありますか？</dt>
<dd><?php echo get_post_meta($post->ID,'fetish_ja',true); ?></dd>
<?php endif; ?>

	</dl>
	<h3>History</h3>
	</div><!-- modelinfo -->

<?php get_template_part('loop', 'history'); ?>


<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>


</div>

<?php else: ?><!-- /sp -->


<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div id="capture"><div class="inner">
<div id="topic_path"><ol><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></ol></div>
<h1><i>Model infomation</i><?php the_title(); ?></h1>
<div id="social"><?php get_template_part('shared/php/social'); ?></div>
</div></div><!-- /#capture -->
<?php endwhile; endif; ?>
<div id="container">
<div id="main_area">

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<article class="archive">
<div class="frame">
<?php if(get_post_meta($post->ID,'notice',true)): ?><div class="content"><?php echo get_post_meta($post->ID,'notice',true); ?></div><?php endif; ?>
<div class="img">
<?php if (has_post_thumbnail()): /* サムネイル画像がある場合 */ the_post_thumbnail(array(210,99999,true)); ?>
<?php else: /* サムネイル画像がない場合 */ ?><img src="<?php echo get_template_directory_uri(); ?>/shared/img/noimg_thumbnail.png" alt="<?php the_title(); ?>">
<?php endif; ?>
</div>
<div class="info">
<h1><?php the_title(); ?></h1>
<?php if(get_post_meta($post->ID,'name_ja',true)): ?>
<h2><?php echo get_post_meta($post->ID,'name_ja',true); ?></h2>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'blog',true) or get_post_meta($post->ID,'twitter',true) or get_post_meta($post->ID,'facebook',true)): ?>
<ul>
<?php if(get_post_meta($post->ID,'twitter',true)): ?>
<li><a href="http://twitter.com/<?php echo get_post_meta($post->ID,'twitter',true); ?>" title="<?php the_title(); ?>のTwitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_twitter.png" alt="Twitter"></a></li>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'facebook',true)): ?>
<li><a href="http://facebook.com/<?php echo get_post_meta($post->ID,'facebook',true); ?>" title="<?php the_title(); ?>のFacebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_facebook.png" alt="Facebook"></a></li>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'blog',true)): ?>
<li><a href="<?php echo get_post_meta($post->ID,'blog',true); ?>" title="<?php the_title(); ?>のブログ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_blog.png" alt="ブログ"></a></li>
<?php endif; ?>
</ul>
<?php endif; ?>
</div>
</div><!-- /.frame -->
</article><!-- /.archive -->

<div class="archive">
<section class="lcolumn">
<h1 class="title"><i>Model date</i>眼帯美人 "<?php the_title(); ?>"</h1>
<div class="alone">
<dl class="interview">
<?php if(get_post_meta($post->ID,'job_ja',true)): ?>
<dt>職業</dt>
<dd><?php echo get_post_meta($post->ID,'job_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'blood',true)): ?>
<dt>血液型</dt>
<dd><?php echo get_post_meta($post->ID,'blood',true); ?>型</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh01',true) or get_post_meta($post->ID,'bwh02',true) or get_post_meta($post->ID,'bwh03',true)): ?>
<dt>スリーサイズ</dt>
<dd>
<?php if(get_post_meta($post->ID,'bwh01',true)): ?><?php echo get_post_meta($post->ID,'bwh01',true); ?><?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh02',true)): ?><?php echo get_post_meta($post->ID,'bwh02',true); ?><?php endif; ?>
<?php if(get_post_meta($post->ID,'bwh03',true)): ?><?php echo get_post_meta($post->ID,'bwh03',true); ?><?php endif; ?>
</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'birthplace',true)): ?>
<dt>出身地</dt>
<dd><?php echo get_post_meta($post->ID,'birthplace',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'constellation',true)): ?>
<dt>星座</dt>
<dd><?php echo get_post_meta($post->ID,'constellation',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'height',true)): ?>
<dt>身長</dt>
<dd><?php echo get_post_meta($post->ID,'height',true); ?>cm</dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'hobby_ja',true)): ?>
<dt>趣味</dt>
<dd><?php echo get_post_meta($post->ID,'hobby_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'skill_ja',true)): ?>
<dt>特技</dt>
<dd><?php echo get_post_meta($post->ID,'skill_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'point_ja',true)): ?>
<dt>チャームポイント</dt>
<dd><?php echo get_post_meta($post->ID,'point_ja',true); ?></dd>
<?php endif; ?>
</dl>
</div>
</section>

<section class="rcolumn">
<h1 class="title"><i>Model interview</i>眼帯美人<?php the_title(); ?>に質問</h1>
<div class="alone">
<dl class="interview">
<?php if(get_post_meta($post->ID,'boom_ja',true)): ?>
<dt>マイブームを教えてください。</dt>
<dd><?php echo get_post_meta($post->ID,'boom_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'like_ja',true)): ?>
<dt>眼帯をした好きな人、キャラクターはいますか？</dt>
<dd><?php echo get_post_meta($post->ID,'like_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'holiday_ja',true)): ?>
<dt>お休みの日は何をしてますか？</dt>
<dd><?php echo get_post_meta($post->ID,'holiday_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'want_ja',true)): ?>
<dt>夢はなんですか？</dt>
<dd><?php echo get_post_meta($post->ID,'dream_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'dream_ja',true)): ?>
<dt>今欲しいものは何ですか？</dt>
<dd><?php echo get_post_meta($post->ID,'want_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'want_ja',true)): ?>
<dt>憧れの女性有名人は？</dt>
<dd><?php echo get_post_meta($post->ID,'longing_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'shop_ja',true)): ?>
<dt>最近行きつけのお店は？</dt>
<dd><?php echo get_post_meta($post->ID,'shop_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'infesting_ja',true)): ?>
<dt>出没ポイント（町）はどこですか？</dt>
<dd><?php echo get_post_meta($post->ID,'infesting_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'confessions_ja',true)): ?>
<dt>告白されるならどんなシチュエーションが理想ですか？</dt>
<dd><?php echo get_post_meta($post->ID,'confessions_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'men_ja',true)): ?>
<dt>好みの男性のタイプは？</dt>
<dd><?php echo get_post_meta($post->ID,'men_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'preference_ja',true)): ?>
<dt>タイプの異性タレント・著名人を教えてください。</dt>
<dd><?php echo get_post_meta($post->ID,'preference_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'gift_ja',true)): ?>
<dt>今一番恋人からもらいたいものは何？</dt>
<dd><?php echo get_post_meta($post->ID,'gift_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'location_ja',true)): ?>
<dt>デートで連れて行ってほしい場所は？</dt>
<dd><?php echo get_post_meta($post->ID,'location_ja',true); ?></dd>
<?php endif; ?>
<?php if(get_post_meta($post->ID,'fetish_ja',true)): ?>
<dt>男性へのフェチはありますか？</dt>
<dd><?php echo get_post_meta($post->ID,'fetish_ja',true); ?></dd>
<?php endif; ?>
</dl>
</div>
</section>
</div><!-- /.archive -->

<?php get_template_part('loop', 'history'); ?>

<?php endwhile; ?>
<?php else: ?>
<p>記事がありません。</p>
<?php endif; ?>

</div><!-- /main_area -->
<?php get_sidebar(); ?>
</div><!-- /container -->
<?php endif; ?><!-- /PC -->
<?php get_footer(); ?>