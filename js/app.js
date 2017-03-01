$(document).ready(function(){

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



//Ajax form
var form = $('#contact-form');
var formMessages = $('#form-messages');

$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
    }).done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');

        // Set the message text.
        $(formMessages).text(response);

        // Clear the form.
        $('input[name=name]').val('');
        $('input[name=email]').val('');
        $('input[name=telephone]').val('');
        $('textarea').val('');
    }).fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
            $(formMessages).text(data.responseText);
        } else {
            $(formMessages).text('Oops! An error occured and your message could not be sent.');
        }
    });
});


});
