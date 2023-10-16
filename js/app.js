// Require Vendors Directory String for basket.js.
var vendorDir = 'js/engine/models/vendors/';

// Colors
var mkColorGold = '#b69625';
var	mkColorDarkBlack = '#020202';
var	mkColorDarkGrey = '#4a4a4a';
var	mkColorGrey = '#9b9b9b';
var	mkColorBrightGrey = '#f3f3f3';
var	mkColorLightGrey = '#fafafa';
var	mkColorBlack = '#000';
var	mkColorWhite = '#fff';

// var xmlHttp = new XMLHttpRequest();

// Functions
// Toggles Interactive Navigation visibility to hidden and back.
$('.burgerNav').click(function () {
	var vy = 'visibility',
		h = 'hidden',
		v = 'visible',
		bC = 'background-color',
		tN = $('.toggleNav'),
		oN = $('#openedNavigation'),
		cN = $('#closedNavigation'),
		rH = $('.rHeader');

	if (tN.css(vy) === h ) {
		tN.css(vy, v);
		oN.css(vy, v);
		cN.css(vy, h);

		if (document.documentElement.clientWidth <= 1324) {
			rH.css(bC, 'rgba(2, 2, 2, 0.9)');
		}
	} else {
		tN.css(vy, h);
		oN.css(vy, h);
		cN.css(vy, v);

		rH.css(bC, mkColorLightGrey);
	}
});

// Start animation if the scroll position at the Social Media class.
function startAniAtScrollPos(targetPosition, targetObject, targetAction) {
	// Bug fix on different pages. = e
	var element = $(targetPosition); // e
	if(element.length) { // e
		$(window).scroll(function() {
			var offsetElement = element.offset().top; // e
		    if ($(window).scrollTop() + $(window).height() >= offsetElement) {
		        $(targetObject).addClass(targetAction);
		    } else {
				$(targetObject).removeClass(targetAction);
			}
		});
	}
};

// Hover effects for the arrow links.
function hoverEffect(hoverObject, targetObject, cssEventName, cssEventValues, originCssEventValues) {
	$(hoverObject).hover(
		function() {
			$(targetObject).css(cssEventName, cssEventValues);
		}, function() {
			$(targetObject).css(cssEventName, originCssEventValues);
		}
	);
}

// JSON request for a random wisdom.
xmlHttp.open("GET", "../engine/models/json/wisdoms.json", true);
xmlHttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        var aWisdoms = JSON.parse(this.responseText);
		var randomQuote = Math.floor( Math.random() * aWisdoms.wisdoms.length ); // Output is an Integer.

		document.getElementById( 'wisdomHeadline' ).innerHTML = aWisdoms.wisdoms[randomQuote].wisdom;
		document.getElementById( 'wisdomLink' ).setAttribute( 'href', aWisdoms.wisdoms[randomQuote].link );
    }
};



// Executes functions.
hoverEffect('.goto', '.goto span', 'margin-left', '30px', '20px');
hoverEffect('.wisdom', '#wisdomLink svg', 'margin', '0 0 5px 5px', '0');

// Fit text vendor function.
// $(".copyright").fitText(1, { minFontSize: '12px', maxFontSize: '36px' });

// Start animation at x, target class y, add class z.
startAniAtScrollPos('content', 'header nav', 'dN');
// startAniAtScrollPos('.socialMedia', '.socialMediaBorder', 'socialMediaBorderStrokeAnimation');
// xmlHttp.send();