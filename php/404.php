<?php get_header(); ?>
<div id="archiveview">
	<h1>404エラー</h1>
</div>
<div id="container">
	<section id="main_area">
		<div class="fullbox">
			<p>ページが見つかりませんでした。</p>
		</div>

		<aside class="tag">
			<h1>タグ一覧</h1>
			<ul class="tag_cloud">
				<?php score_tag_cloud(); ?>
			</ul>
		</aside>
	</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>