/*
THE HEADER ANIMATIONS
 */

function OnHeaderElementMouseEnter()
{
    this.animate({'font-size': '1.5em'})
}


$(window).ready(function () {

    $('#nav-item-last-wrapper').mouseenter(OnHeaderElementMouseEnter);
});