// Initilize Controller.
var controller = new ScrollMagic.Controller({
	tweenChanges: true,
	addIndicators: true
});

// All Scenes.
// MAIN Scenes.
// var mkHeaderLogoStrokeScene = new ScrollMagic.Scene({
// 	triggerElement: '.mkLogo',
// 	triggerHook: 0
// }).setTween(mkHeaderLogoStrokeTimeline);
//
// var socialMediaBorderStrokeScene = new ScrollMagic.Scene({
// 	triggerElement: '.socialMedia',
// 	triggerHook: 1
// }).setTween(socialMediaBorderStrokeTimeline);
//
// // HOME Scenes.
// var latestProjectsBoxShadowScene = new ScrollMagic.Scene({
// 	triggerElement: '.latestProjectsBox',
// 	triggerHook: 0.725
// }).setTween(latestProjectsBoxShadowTimeline);

// WORK Scenes.

// BLOQ Scenes.

// HIRE Scenes.

// ABOUT Scenes.

// CONTACT Scenes.


// To deconstruct / analyse the TriggerElements.
// TriggerElement 1
var mkHeaderLogoStrokeScene = new ScrollMagic.Scene({
	triggerElement: '.mkLogo',
	triggerHook: 0.1
}).setTween(mkHeaderLogoStrokeTimeline);

// Trigger Element 2
var latestProjectsBoxShadowScene = new ScrollMagic.Scene({
	triggerElement: '.latestProjectsBox',
	triggerHook: 0.725
}).setTween(latestProjectsBoxShadowTimeline);

// Trigger Element 3
var socialMediaBorderStrokeScene = new ScrollMagic.Scene({
	triggerElement: '.socialMedia',
	triggerHook: 1
}).setTween(socialMediaBorderStrokeTimeline);


// All Scenes added to the Controller.
controller.addScene([
	mkHeaderLogoStrokeScene,
	socialMediaBorderStrokeScene,
	latestProjectsBoxShadowScene
]);


// EXAMPLE:
// // Scale Animation Setup
// // .to('@target', @length, {@object})
// var scale_tween = TweenMax.to('#scale-animation', 1, {
// 	scenetransform: 'scale(.75)',
// 	ease: Linear.easeNone
// });
//
// // BG Animation Setup
// // .to('@target', @length, {@object})
// var bg_tween = TweenMax.to('#bg-trigger', 1, {
// 	backgroundColor: '#FFA500',
// 	ease: Linear.easeNone
// });
//
// // Init ScrollMagic Controller
// var controller = new ScrollMagic.Controller();
//
// // Scale Scene
// var scale_scene = new ScrollMagic.Scene({
// 	triggerElement: '#scale-trigger'
// })
// .setTween(scale_tween);
//
// // Background Scene
// var bg_scene = new ScrollMagic.Scene({
// 	triggerElement: '#bg-trigger'
// })
// .setTween(bg_tween);
//
// controller.addScene([
// 	scale_scene,
// 	bg_scene
// ]);
