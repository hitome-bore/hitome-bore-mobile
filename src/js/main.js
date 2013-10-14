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
var titleText = $('title').html();

function twitterUrl() {
	var tweettext = $('title').html();
	var href = "http://twitter.com/intent/tweet?text=" + escapeEncodeUrl(tweettext) + location.href;
	window.open(href);
}

function facebookUrl() {
	var href = "http://www.facebook.com/sharer/sharer.php?u=" + location.href;
	window.open(href);
}

function hatenaUrl() {
	var href = "http://b.hatena.ne.jp/entry/" + location.href;
	window.open(href);
}

function mixiUrl() {
	var href = "http://mixi.jp/share.pl?u=" + location.href + "&k=224e1ea077639a940664bfad5fb7f91fc19b6b94";
	window.open(href);
}

function googleUrl() {
	var href = "https://plus.google.com/share?url=" + location.href;
	window.open(href);
}

function pinterestUrl() {
	var photoUrl = $('.photo');
	var href = "http://pinterest.com/pin/create/button/?url=" + location.href + "&media=" + photoUrl[0].src + "&description=" + escapeEncodeUrl(titleText);
	window.open(href);
}


function tumblrUrl() {
//	var href = "http://www.tumblr.com/share/?v=2&u=" + location.href + "&t=" + escapeEncodeUrl(titleText) + "&s="+ escapeEncodeUrl(titleText);
	// var href = "http://www.tumblr.com/share/?v=3&u=http://hitome-bore.com&t=hitome-bore.com&s=hitomebore.com";
// http://www.tumblr.com/share?v=3&amp;u=http%3A%2F%2Fattrip.jp/26628&amp;t=%E3%82%BD%E3%83%BC%E3%82%B7%E3%83%A3%E3%83%AB%E3%83%9C%E3%82%BF%E3%83%B3%26quot%3BShare+On+Tumblr%26quot%3B%E3%82%92WordPress%E3%81%AB%E5%85%A5%E3%82%8C%E3%82%8B%E6%96%B9%E6%B3%95
	var tumblr_photo_source = $('.photo');
	var tumblr_photo_caption = $('title').html();
	var tumblr_photo_click_thru = location.href;
	var href = "http://www.tumblr.com/share/photo?source=" + encodeURIComponent(tumblr_photo_source[0].src) + "&caption=" + encodeURIComponent(tumblr_photo_caption) + "&clickthru=" + encodeURIComponent(tumblr_photo_click_thru);

	// var tumblr_button = document.createElement("a");
	// tumblr_button.setAttribute("href", "http://www.tumblr.com/share/photo?source=" + encodeURIComponent(tumblr_photo_source[0].src) + "&caption=" + encodeURIComponent(tumblr_photo_caption) + "&clickthru=" + encodeURIComponent(tumblr_photo_click_thru));
	// tumblr_button.setAttribute("title", "Share on Tumblr");
	// tumblr_button.setAttribute("style", "display:inline-block; text-indent:-9999px; overflow:hidden; width:40px; height:40px; background:url('../img/icon-tumblr.png') top left no-repeat transparent;");
	// tumblr_button.innerHTML = "Share on Tumblr";
	// document.getElementById("tumblr_button_abc123").appendChild(tumblr_button);
	window.open(href);
}