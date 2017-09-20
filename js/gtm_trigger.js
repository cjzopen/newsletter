//gtm trigger
var dataLayer = window.dataLayer || [];

// menu a click
$('nav a').click(function(){
	var $text = $(this).text();
	dataLayer.push({
		"event": "menu_click",
		"menu_text": $text
	})
});

// footer a click
$('footer a').click(function(){
	var $text = $(this).text();
	var $url = $(this).attr('href');
	dataLayer.push({
		"event": "footer_click",
		"footer_url": $url,
		"footer_text": $text,
	})
});