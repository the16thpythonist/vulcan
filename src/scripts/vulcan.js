/*
THE HEADER ANIMATIONS
 */
var SLIDE_AMOUNT = 3;
var SLIDE_SATE = 1;

var HEADER_STATE = true;

function onHeaderElementMouseEnter()
{
    var element = $(this);
    var prop = {
        'border-color': 'rgba(230,70,42,0.98)',
        'color': 'white'
    };
    element.animate(prop, 'fast');
}

function onHeaderElementMouseLeave()
{
    var element = $(this);
    var prop = {
        'border-color': 'transparent',
        'color': 'rgba(195,195,195,0.98)'
    };
    element.animate(prop, 'fast');
}

function onOverlayItemMouseEnter()
{

    var element = $(this);
    var prop = {
        'font-size': '+=0.2em',
        'color': 'white'
    };
    element.animate(prop, 'fast');
}

function onOverlayItemMouseLeave()
{
    var element = $(this);
    var prop = {
        'font-size': '-=0.2em',
        'color': 'rgba(225,225,225,0.75)'
    };
    element.animate(prop, 'fast');
}

function onScroll()
{
    var header, navItem, lastItem, logo;
    if (document.documentElement.scrollTop === 0 && HEADER_STATE === false) {
        // Glue
        header = $('#vulcan-header-wrapper');
        header.css('position', 'relative');

        var headerProp = {
            'height': '65px'
        };
        header.animate(headerProp, 'fast');

        navItem = $('.nav-item');
        navItem.animate({'font-size': '1.2em'}, 'fast');

        lastItem = $('#nav-item-last-wrapper');
        lastItem.animate({'margin-right': '38%'}, 'fast');

        logo = $('#logo-icon-image');
        logo.animate({'height':'80px', 'width':'200px'}, 'fast');

        HEADER_STATE = true;
    } else if (document.documentElement.scrollTop !== 0 && HEADER_STATE === true) {
        // Free
        header = $('#vulcan-header-wrapper');
        header.css('position', 'fixed');

        var headerProp = {
            'height': '50px'
        };

        header.animate(headerProp, 'fast');

        navItem = $('.nav-item');
        navItem.animate({'font-size': '1em'}, 'fast');

        lastItem = $('#nav-item-last-wrapper');
        lastItem.animate({'margin-right': '2%'}, 'fast');

        logo = $('#logo-icon-image');
        logo.animate({'height':'55px', 'width':'150px'}, 'fast');

        HEADER_STATE = false;
    }
}

function slideShowAdvance(){
    // Getting the wrapper div
    var sectionWrapper = $('#main-section-wrapper');
    // Getting the current image by using the global slide show state variable
    var currentImage = $('#slide-image' + SLIDE_SATE)
    // Getting the image, that is next in the cycle, by checking if already at the last or not
    var nextSlideState;
    if (SLIDE_SATE === SLIDE_AMOUNT){
        SLIDE_SATE = 1
    } else {
        // Incrementing the slide state
        SLIDE_SATE++;
    }
    nextSlideState = SLIDE_SATE;
    // Getting the image corresponding to the next slide state
    var nextImage = $('#slide-image' + nextSlideState);

    // Actually animating the image swap
    sectionWrapper.animate({'opacity': 0.8}, 750, function () {
        sectionWrapper.css('background', 'url(../../../vulcan/src/img/background' + nextSlideState +'.png)');
        sectionWrapper.animate({'opacity':1}, 750);
    });
    currentImage.animate({'opacity': '0'}, 1500);
    nextImage.animate({'opacity': '1'}, 1500, function () {
        ;
    });
}

function titleSlideIn()
{
    var title = $('#slide-show-overlay-title');
    var subTitle = $('#slide-show-overlay-sub-title');

    var prop = {
        'opacity': '1',
        'left': 40
    };

    title.animate(prop, 900);
    subTitle.animate(prop, 900);
}


function overlayMenuSlideIn()
{
    setTimeout(overlayItemSlideInFactory('third', '10px', 300), 200);
    setTimeout(overlayItemSlideInFactory('second', '40px', 400), 500);
    setTimeout(overlayItemSlideInFactory('first', '60px', 500), 700);
}

function overlayItemSlideInFactory(suffix, leftSlide, speed)
{
    function gen() {
        var element = $('#slide-show-overlay-menu-item-' + suffix);
        var prop = {
            'opacity': '1',
            'left': leftSlide
        };
        element.animate(prop, speed);
    }

    return gen;
}

function initOverlayMenu()
{
    var suffixArray = ['first', 'second', 'third'];
    var index, element;
    for (index in suffixArray){
        element = $('#slide-show-overlay-menu-item-' + suffixArray[index]);
        element.mouseenter(onOverlayItemMouseEnter);
        element.mouseleave(onOverlayItemMouseLeave);
    }
}

$(window).ready(function () {
    var header = $('#vulcan-header-content-wrapper');
    var children = header.children('div');
    var index, child;
    for(index in children){
        child = $(children[index].firstElementChild);
        child.mouseenter(onHeaderElementMouseEnter);
        child.mouseleave(onHeaderElementMouseLeave);
    }

    $(window).scroll(onScroll);

    initOverlayMenu();

    setInterval(slideShowAdvance, 12000);
    setTimeout(titleSlideIn, 300);
    setTimeout(overlayMenuSlideIn, 500);





});