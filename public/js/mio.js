	var k =jQuery.noConflict();
	var j =jQuery.noConflict();
  var l =jQuery.noConflict();
     jQuery(document).ready(function(){
       
      jQuery(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      k('.carousel.carousel-slider').carousel({fullWidth: true});
      j('.button-collapse').sideNav({
      menuWidth: 200, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    
  );

    });

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
} 