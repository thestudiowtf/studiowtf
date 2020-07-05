$("#works").hover(function(){
      $("#works").addClass("zindex");
      $("#home").removeClass("zindex");//Add the active class to the area is hovered
  });


$("#home").hover(function(){
      $("#home").addClass("zindex");
      $("#works").removeClass("zindex");//Add the active class to the area is hovered
  });



$(document).ready(function() {
    if($(window).width() > 600) {
        const swup = new Swup();    // only this line when included with script tag
    }
});
