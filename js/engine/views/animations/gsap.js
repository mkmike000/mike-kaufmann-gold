// Initilize Timline.
var timeline = new TimelineMax();

// ease:Power1.easeInOut --> Add to Timelines.
// Change Time right.

// All Timelines.
// MAIN Timelines.
var mkHeaderLogoStrokeTimeline = new TimelineMax()
	.from('.mkHeaderLogoStrokeAnimation', 5, {opacity: '0'})
	.to('.mkHeaderLogoStrokeAnimation', 5, {opacity: '1', ease:'Power5.easeOut'});

var socialMediaBorderStrokeTimeline = new TimelineMax()
	.from('.socialMediaBorder', 5, {
		fill: 'transparent',
		stroke-dashoffset: '0px',
		stroke-dasharray: '19px, 19px',
		stroke: '#b69627'
	})
	.to('.socialMediaBorder', 5, {
		stroke-dashoffset: '0px',
		stroke-dasharray: '200px, 40px',
		stroke: 'transparent'
	});

// HOME Timelines.
var latestProjectsBoxShadowTimeline = new TimelineMax()
		.to('.latestProjectsBox', 1, {boxShadow: '0 0px 35px rgba(2, 2, 2, 0.25)'});

// WORK Timelines.

// BLOQ Timelines.

// HIRE Timelines.

// ABOUT Timelines.

// CONTACT Timelines.
