
const $ = jQuery;

$(document).ready(function () {
    console.log('main is fine');

});

function showMenu() {
    $("#menu-page").show();
    $(".site-contains-container").hide();
    $(".navigation-bar-mobile").hide();
}

function hideMenu() {
    $("#menu-page").hide();
    $(".site-contains-container").show();
    $(".navigation-bar-mobile").show();

}