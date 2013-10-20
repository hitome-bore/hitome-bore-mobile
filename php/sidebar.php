<div id="right_area">
<!--  -->
<aside class="ads">
<?php // <div class="banner">echo adrotate_group(1);</div> ?>
<div class="banner"><a href="/entry/" title="モデル募集"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/bnr_model.jpg" alt="モデル募集"></a></div>
</aside><!-- /.ads -->

<div class="search">
<script>
$(document).ready(function() {
	$('input[title]').each(function() {
		if($(this).val() === '') {
			$(this).val($(this).attr('title'));
		}
		$(this).focus(function() {
			if($(this).val() == $(this).attr('title')) {
				$(this).val('').addClass('focused');
			}
		});
		$(this).blur(function() {
			if($(this).val() === '') {
				$(this).val($(this).attr('title')).removeClass('focused');
			}
		});
	});
});
</script>
<form method="get" action="<?php bloginfo('url'); ?>"><fieldset>
<input class="text" type="text" name="s" value="<?php if($_GET[s]): echo $_GET[s]; else: echo "検索"; endif; ?>" title="検索"><input class="send" type="image" src="<?php echo get_template_directory_uri(); ?>/shared/img/btn_search.png" alt="検索" onClick="void(this.form.submit());return false">
</fieldset></form>
</div><!-- /.search -->

<section class="plate ranking">
<h1>月間ランキング</h1>
<ol>
<?php if (function_exists('wpp_get_mostpopular')) {
ob_start();
$args = 'post_type=model&order_by="views"&range="monthly"&stats_comments=0&limit=5&post_start="<li>"&thumbnail_width=100&thumbnail_height=66&thumbnail_selection=usergenerated';
wpp_get_mostpopular($args);
$popular = ob_get_clean();

$popular = explode('</li>', $popular);
$counter=1;

foreach ($popular as &$p)    {
$p = str_replace('<li>', '<li class="rank rank'.$counter.'"><i>'. $counter. "<span>位</span></i>", $p);
$counter++;
}

$popular = implode('</li>', $popular);
$popular = str_replace('<ul>', '<ul>', $popular);
echo $popular;
} ?>
</ol>
</section><!-- /.ranking -->

<aside class="plate">
	<fb:like-box href="https://www.facebook.com/hitomebore.fanpage" width="290" height="300" show_faces="true" stream="true" header="false"></fb:like-box>
</aside>

<aside class="plate">
	<a class="twitter-timeline" href="https://twitter.com/hitomeboread" data-widget-id="325975095292076032">@hitomeboread からのツイート</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</aside>

</div><!-- /#right_area -->