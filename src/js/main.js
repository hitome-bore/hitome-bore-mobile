/**
 * main.js
 */

// flex slider
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});

function replaceAll(expression, org, dest){
	return expression.split(org).join(dest);
}

/* ; , / ? : @ & = + $ */
var escapeString = [';', ',', '/', '?', ':', '@', '&', 'amp', 'lt', 'gt', '=', '+', '$'];
function escapeEncodeUrl(text) {
	for (var i = 0; i < escapeString.length; i++) {
		text = replaceAll(text, escapeString[i], ' ');
	}
	return text;
}

// このへんのシェアボタンはページ遷移してしまうので、window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false; 的な感じで新たなウィンドウが開くようにする。
function twitterUrl() {
	var tweettext = $('title').html();
	location.href = "http://twitter.com/intent/tweet?text=" + escapeEncodeUrl(tweettext) + location.href;
}

function facebookUrl() {
	location.href = "http://www.facebook.com/sharer/sharer.php?u=" + location.href;
}

function hatenaUrl() {
	location.href = "http://b.hatena.ne.jp/entry/" + location.href;
}

function mixiUrl() {
	location.href = "http://mixi.jp/share.pl?u=" + location.href + "&amp;k=224e1ea077639a940664bfad5fb7f91fc19b6b94";
}