/*  
 *  
 *  
 *  
 *  
 *  
 *  
 */


$(document).ready(function(){

  if($(window).width()<768){
    // Functions to be executed if the device is mobile
    
  }
  else{
    //Functions to be executed if the device is screen

  }

  $(window).on('resize', function(){
    if($(window).width()<768){
      $('.navbar').replaceClass('navbar-static-top', 'navbar-fixed-top');
      $('body').css('padding-top', '65px');
    }
    else{
      $('.navbar').replaceClass('navbar-fixed-top', 'navbar-static-top');
      $('body').removeAttr('style');
    }
  });

  $(window).scroll(function(){
    if($(window).width()>=768)
      if($(this).scrollTop()!=0)
        $('#scroll-top').fadeIn();
      else
        $('#scroll-top').fadeOut();
  });
  $('#scroll-top').on('click', function(e){
    $('html body').stop().animate({
      'scrollTop': 0
      }, 1000, 'swing');
  });

	$(function(){
		var w=$(window).width();
		if(w<768){
			$('.navbar').removeClass('navbar-static-top');
			$('.navbar').addClass('navbar-fixed-top');
			$('body').css('padding-top', '65px');
		}
    else{
      //$('#top-bar-collapse').removeClass('navbar-collapse collapse');
    }
	});

	$('.nav.navbar-nav > li').on('click', function(e) {
  	$('.nav.navbar-nav > li').removeClass('active');
  	$(this).addClass('active');
    if($(this).hasClass('open'))
      $(this).removeClass('active');
    //return false;
	});

	$('a[href^="#"]').on('click',function (e) {
    //e.preventDefault();
    var hash = this.hash;
    if($(hash).length){
      if($(window).width()<768){
        $('html, body').stop().animate({
          'scrollTop': $(hash).offset().top-65
        }, 1000, 'swing', function(){
          window.location.hash=hash;
          $('.nav.navbar-nav > li').removeClass('active');
        });
        $('#top-bar-collapse').collapse('hide');
      }
      else
    	  $('html, body').stop().animate({
        	'scrollTop': $(hash).offset().top
    		 }, 1000, 'linear', function () {
        	window.location.hash = hash;
          $('.nav.navbar-nav > li').removeClass('active');
    	  });
	  }
    else{
      $('.nav.navbar-nav > li').removeClass('active');
      $('html, body').stop().animate({
          'scrollTop': 0
        }, 1000, 'swing', function () {
          window.location.hash = hash;
          $('.nav.navbar-nav > li').removeClass('active');
      });
      if($(window).width()<768){
        $('#top-bar-collapse').collapse('hide');
      }      
    }
    //$('.nav.navbar-nav > li').removeClass('active');
  });
});