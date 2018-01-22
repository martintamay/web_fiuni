
// ISOTOPE FILTER
jQuery(document).ready(function($){

  if ( $('.iso-box-wrapper').length > 0 ) { 

      var $container  = $('.iso-box-wrapper'), 
        $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {

        $container.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.iso-box'
        });

        $imgs.load(function(){
          $container.isotope('reLayout');
        })

      });

      //filter items on button click

      $('.filter-wrapper li a').click(function(){

          var $this = $(this), filterValue = $this.attr('data-filter');

      $container.isotope({ 
        filter: filterValue,
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false, 
        }                
      });             

      // don't proceed if already selected 

      if ( $this.hasClass('selected') ) { 
        return false; 
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

        return false;
      }); 

  }

});


// PRELOADER JS
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    


    var $container = $('.portfolioContainer');
    if ($container!=null) {
      $container.isotope({
          filter: '*',
          animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
          }
      });
   
      $('.portfolioFilter a').click(function(){
          $('.portfolioFilter .current').removeClass('current');
          $(this).addClass('current');
   
          var selector = $(this).attr('data-filter');
          $container.isotope({
              filter: selector,
              animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
              }
           });
           return false;
      }); 
      if(document.getElementById("zona-carga")!=null && get_hash()!=""){
        abrir(get_hash().replace("#", ""));
      }

    }
});


// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
	if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
});


/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(function(){
	
  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();


  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

  // NIVO LIGHTBOX
  $('.iso-box-section a').nivoLightbox({
        effect: 'fadeScale',
    });


  // HOME BACKGROUND SLIDESHOW
  $(function(){
    jQuery(document).ready(function() {
		$('#home').backstretch([
		   "images/imgfiuni1.jpg", 
		   "images/imgfiuni2.jpg", 
		   "images/imgfiuni3.jpg",
		   "images/imgfiuni4.jpg",
		],  {duration: 3000, fade: 750});
		$('#cabecera').backstretch([
		   "../images/imgfiuni1.jpg", 
		   "../images/imgfiuni2.jpg", 
		   "../images/imgfiuni3.jpg",
		   "../images/imgfiuni4.jpg",
		],  {duration: 3000, fade: 750});
	
	});
  })

});
	  
//Por Martín Tamay
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  if (document.getElementById("mySidenav").style.width == "250px") {
    closeNav();
  }else{
  	document.getElementById("mySidenav").style.width = "250px";
  	document.getElementById("nav-superior").style.height = "0";
  }
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
	document.getElementById("nav-superior").style.height = "auto";
   // document.body.style.backgroundColor = "white";
} 

function abrir(dir){
  set_hash(dir);
  dir = dir+".html";
	document.getElementById("zona-carga").src=dir;
}


function redimensionarZonaCarga() {
  var iframe = window.parent.document.getElementById("zona-carga");
  iframe.style.height = 0;
  iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
}

function cambiar_div(div, contenido){
  div.innerHTML = contenido;
}
function get_hash(){
  return window.location.hash;
}
function set_hash(hash){
  window.location.hash = "#"+hash;
}