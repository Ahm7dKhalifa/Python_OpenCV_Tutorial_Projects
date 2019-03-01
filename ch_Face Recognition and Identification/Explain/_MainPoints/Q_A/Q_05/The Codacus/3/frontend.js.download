;(function($) {

	var $anchors = $('a.htt-tweet'),
	//centers window.open (even w/ dual monitors)
	//http://stackoverflow.com/questions/4068373/center-a-popup-window-on-screen
	doCenteredPopup = function(url, title, w, h) {
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left,
    dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top,
		width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
    left = ((width / 2) - (w / 2)) + dualScreenLeft,
    top = ((height / 2) - (h / 2)) + dualScreenTop,
    newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    if (window.focus) { newWindow.focus(); }
	}

	$anchors.on('click', function(e) {
		e.preventDefault();
		doCenteredPopup($(this).attr('href'), 'Share on Twitter', 600, 400);
	});

})(jQuery);