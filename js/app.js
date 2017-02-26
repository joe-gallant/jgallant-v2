$(document).ready(function(){

if($(window).height() < 450) {
    $('.introductionText').hide();
}

var $document = $(document),
    $element = $('header'),
    className = 'fixed';
    heroHeight = $('.hero').height();


if($(window).width() > 430) {
    $document.scroll(function() {
      $element.toggleClass(className, $document.scrollTop() >= heroHeight);
    });
}

var s = skrollr.init({
	forceHeight: false,
	mobileCheck: function() {
        //hack - forces mobile version to be off
        return false;
    }
});

document.querySelector(".burger_menu").addEventListener("click", function(){
	var menu = document.querySelector('.burger_menu');
	menu.classList.toggle('open');

	var wrapper = document.querySelector('.site_wrapper');
	wrapper.classList.toggle('move');
});

$(document).on('click', 'a.scrollLink', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 68
    }, 500);    
});

$(document).on('click', 'a.mobScrollLink', function(event){
    event.preventDefault();
    $('.burger_menu').toggleClass('open');
    $('.site_wrapper').toggleClass('move');
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 68
    }, 500);    
});

});
