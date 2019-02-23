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

//accessibility for smooth scroll
$( document ).ready(function() {
function filterPath(string) {
    return string
        .replace(/^\//, '')
        .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
        .replace(/\/$/, '');
}

var locationPath = filterPath(location.pathname);
$('a[href*="' + '#' +' "]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    var hash = this.hash;
    if ($("#" + hash.replace(/#/, '')).length) {
        if (locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, '')) {
            var $target = $(hash),
                target = this.hash;
            if (target) {
                $(this).click(function(event) {
                    if ($('#animation').prop('checked')) {
                        event.preventDefault();
                        $('html,body').animate({scrollTop: $target.offset().top}, 1000, function() {
                            location.hash = target;
                            $target.focus();
                            if ($target.is(":focus")) { //checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); //Adding tabindex for elements not focusable
                                $target.focus(); //Setting focus
                            }
                        });
                    }
                });
            }
        }
    }
});

});
//owl sliders
//
//
$( document ).ready(function() {

$('.owl-1.owl-carousel').owlCarousel({
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
items: 1,
dots:true
}
}
});
$('.owl-2.owl-carousel').owlCarousel({
loop: true,
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
items: 1
},
960: {
items: 1,
stagePadding: 100
},
1200: {
items: 2,
stagePadding: 100

}
}
});
$('.why-choose-slider.owl-carousel').owlCarousel({
loop: true,
autoplay: true,
nav: true,
navText: ["",""],
lazyLoad: true,
dots:false,
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
items: 1,
dots:true
}
}
});
$('.markets-slider.owl-carousel').owlCarousel({
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
items: 1,
dots:true
}
}
});
});