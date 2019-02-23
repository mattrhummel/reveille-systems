//banner
//
//
$(document).on("scroll", function(){
if
($(document).scrollTop() > 100){
$("#banner").addClass("shrink");
}
else
{
$("#banner").removeClass("shrink");
}
});
//owl slider
//
//
jQuery(document).ready(function($) {
var owl1 = $('.owl-1.owl-carousel');
owl1.on('initialize.owl.carousel initialized.owl.carousel ' +
'initialize.owl.carousel initialize.owl.carousel ' +
'resize.owl.carousel resized.owl.carousel ' +
'refresh.owl.carousel refreshed.owl.carousel ' +
'update.owl.carousel updated.owl.carousel ' +
'drag.owl.carousel dragged.owl.carousel ' +
'translate.owl.carousel translated.owl.carousel ' +
'to.owl.carousel changed.owl.carousel',
function(e) {
$('.' + e.type)
.removeClass('secondary')
.addClass('success');
window.setTimeout(function() {
$('.' + e.type)
.removeClass('success')
.addClass('secondary');
}, 500);
});
owl1.owlCarousel({
loop: true,
autoplay: false,
nav: true,
navText: ["",""],
lazyLoad: true,
margin: 0,
video: true,
responsive: {
0: {
items: 1
},
600: {
items: 1
},
960: {
items: 1,
},
1200: {
items: 1
}
}
});
var owl2 = $('.owl-2.owl-carousel');
owl2.on('initialize.owl.carousel initialized.owl.carousel ' +
'initialize.owl.carousel initialize.owl.carousel ' +
'resize.owl.carousel resized.owl.carousel ' +
'refresh.owl.carousel refreshed.owl.carousel ' +
'update.owl.carousel updated.owl.carousel ' +
'drag.owl.carousel dragged.owl.carousel ' +
'translate.owl.carousel translated.owl.carousel ' +
'to.owl.carousel changed.owl.carousel',
function(e) {
$('.' + e.type)
.removeClass('secondary')
.addClass('success');
window.setTimeout(function() {
$('.' + e.type)
.removeClass('success')
.addClass('secondary');
}, 500);
});
owl2.owlCarousel({
loop: true,
stagePadding: 0,
autoplay: true,
nav: true,
navText: ["",""],
lazyLoad: true,
margin: 20,
dots:false,
center:false,
responsive: {
0: {
items: 1
},
600: {
items: 2
},
960: {
items: 2,
},
1200: {
items: 2
}
}
});
});