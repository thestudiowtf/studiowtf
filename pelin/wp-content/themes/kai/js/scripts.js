/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(document).ready(function($){
  $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
  $('#cssmenu #menu-button').on('click', function(){
    var menu = $(this).next('ul');
    if (menu.hasClass('open')) {
      menu.removeClass('open');
    } else {
      menu.addClass('open');
    }
  });
});




(function( $ ) {
"use strict";
$(function() {
    // set the container that Masonry will be inside of in a var
    // adjust to match your own wrapper/container class/id name
    var container = document.querySelector('#masonry');
    //create empty var msnry
    var msnry;
    // initialize Masonry after all images have loaded
    imagesLoaded( container, function() {
        msnry = new Masonry( container, {
            // adjust to match your own block wrapper/container class/id name
            itemSelector: '.post-item',
            // option that allows for your website to center in the page
            isFitWidth: true,
            gutter: 10  
        });
    });
});
}(jQuery));
