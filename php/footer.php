<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ): ?>
	<footer>
		<h3>About us</h3>
		<div class="about">
			<p>片目惚れ~ひとめぼれ~は眼帯美人を高画質写真もりだくさんでご紹介する眼帯美人メディアです。</p>
			<a href="/about">詳細</a>
		</div>
		<div id="entrybutton"><a href="/entry">モデル募集中！</a></div>
		<div id="collaboEntry"><a href="/collabo-entry">タイアップ企業募集！</a></div>
		<h3>Share</h3>
		<ul class="share">
			<li>
				<!-- Twitter -->
				<a href="javascript:twitterUrl()" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-twitter.png" alt="" width="40"></a>
			</li>
			<li>
				<!-- Facebook -->
				<a href="javascript:facebookUrl()" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-facebook.png" alt="" width="40"></a>
			</li>
			<li>
				<!-- hatena -->
				<a href="javascript:hatenaUrl()" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="このエントリーをはてなブックマークに追加">
				<img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-hatena.png" alt="このエントリーをはてなブックマークに追加" width="40" height="40" style="border: none;" /></a>
			</li>
			<li>
				<!-- mixi -->
				<a href="javascript:mixiUrl()"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-mixi.png" alt="" width="40"></a>
			</li>
			<li>
				<!-- google -->
				<a href="javascript:googleUrl()">
					<img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-google.png" alt="ココはお好きにどぞ" width="40"/>
				</a>
			</li>
			<li>
				<!-- pinterest -->
				<a href="javascript:pinterestUrl()"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-pinterest.png" alt="pinterest" width="40"></a>
			</li>
			<li>
				<!-- tumblr-->
				<a href="javascript:tumblrUrl()"><img alt="share on tumblr" src="<?php echo get_template_directory_uri(); ?>/shared/img/icon-tumblr.png" width="40"/></a>
			</li>
			<li>
				<!-- LINE -->
				<span>
					<script type="text/javascript" src="http://media.line.naver.jp/js/line-button.js?v=20130508" ></script>
					<script type="text/javascript">
						new jp.naver.line.media.LineButton({"pc":false,"lang":"ja","type":"d"});
					</script>
				</span>
			</li>
		</ul>
		<ul class="footerMenu">
			<li><p><a href="/rule/">利用規約</a></p></li>
			<li><p><a href="/privacy/">Privacy Policy</a></p></li>
			<li><p><a href="/contact/">Contact</a></p></li>
		</ul>
		<p id="copyright">Copyright © 2013 片目惚れ~ひとめぼれ~. All Rights Reserved.</p>
	</footer>
</body>
</html>
<?php else: ?><!-- /sp -->
<div id="board"><div class="inner">


<?php $news = get_posts('post_type=news&post_status=publish&posts_per_page=12&orderby=date&order=DESC'); ?>
<section class="archive">
<h1 class="title"><i>News</i>お知らせ</h1>
<ol>
<?php foreach($news as $post): start_wp(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><time datetime="<?php the_time('Y-m-d¥TH:i:s+09:00'); ?>"><?php the_time("Y.m.d"); ?></time><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ol>
</section><!-- /.archive -->

<section class="archive">
<h1 class="title"><i>Archive</i>月別の写真</h1>
<ol>
<?php wp_get_archives('type=monthly&limit=12'); ?>
</ol>
</section><!-- /.archive -->

<section class="archive last">
<h1 class="title"><i>Shared</i>共有</h1>

<?php if(get_the_author_meta('twitter', 1) or get_the_author_meta('pinterest', 1) or get_the_author_meta('facebook', 1)): ?>
<ul>
<?php if(get_the_author_meta('twitter', 1)): ?>
<li><a href="http://twitter.com/<?php the_author_meta('twitter', 1); ?>" title="<?php bloginfo('name'); ?> Twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_twitter.png" alt="Twitter"></a></li>
<?php endif; ?>
<?php if(get_the_author_meta('facebook', 1)): ?>
<li><a href="http://www.facebook.com/<?php the_author_meta('facebook', 1); ?>" title="<?php bloginfo('name'); ?> Facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_facebook.png" alt="Facebook"></a></li>
<?php endif; ?>
<?php if(get_the_author_meta('pinterest', 1)): ?>
<li><a href="http://pinterest.com/<?php the_author_meta('pinterest', 1); ?>/" title="<?php bloginfo('name'); ?> Pinterest" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/ico_pinterest.png" alt="Pinterest"></a></li>
<?php endif; ?>
</ul>
<?php endif; ?>

<ul class="social">
<li class="facebook"><fb:like href="https://www.facebook.com/hitomebore.fanpage" send="false" layout="box_count" width="450" show_faces="false"></fb:like></li>
<li class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php bloginfo('url'); ?>" data-text="<?php bloginfo('name'); ?>" data-count="vertical" data-lang="ja">ツイート</a>
<?php if(is_home()): ?><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><?php endif; ?></li>
<li class="gplus"><div class="g-plusone" data-size="tall" data-href="<?php bloginfo('url'); ?>"></div></li>
<li class="bottom"><a href="http://b.hatena.ne.jp/entry/<?php get_template_part('shared/php/url'); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php get_template_part('shared/php/title'); ?>" data-hatena-bookmark-layout="vertical-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;"></a>
<?php if(is_home()): ?><script src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script><?php endif; ?></li>
</ul>
</section><!-- /.archive -->

<script>
$(function(){
$("#pagetop a#top").click(function(){
	$('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
	return false;
})
});
</script>
<div id="pagetop"><a href="#top" title="ページトップ"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/btn_pagetop.png" alt="ページトップへ"></a></div>
</div></div><!-- /#board -->
<footer id="footer"><div class="inner">

<div id="copyright">
<small>Copyright &copy; <?php copyright(2013); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="license"><?php bloginfo('name'); ?></a>. All Rights Reserved.</small></div>
<ul>
<?php wp_nav_menu(array('menu' => 'footer')); ?>
</ul>

</div></footer><!-- /#footer -->
<?php wp_footer(); ?>
</body></html>
<?php endif; ?><!-- /PC -->
