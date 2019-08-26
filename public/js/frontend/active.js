$(document).ready(function () {
    var location = window.location.href;
    $('.header li a').each(function(){
            if(location.indexOf(this.href)> -1) {
               $('a').removeClass("header__list--active");
               $(this).addClass('header__list--active');
        }
    });
});