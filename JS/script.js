

$(function() {
    $('.faq').find('p').hide().end().find('h1').click(function() {
        $(this).next().slideToggle();
    });
});

