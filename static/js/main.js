$(function () {
    $('img.maximize').click(function () {
        $('<div />', {class: "overlay"}).append($('<img />', {src: $(this).attr('src')})).click(function () {
            $(this).fadeOut('fast', function () {
                $(this).remove();
            });
        }).fadeIn('fast').appendTo($('body'));
    });
});


function ddSelectNext() {
    homedd_to = setTimeout(function () {
        if (!$('.home-dd-popup').length) {
            $('.home-dd').click();
            setTimeout(function () {
                var next = $('.home-dd-popup-item:contains("' + $('.home-dd').text() + '")').next('.home-dd-popup-item')
                if (!next.length) {
                    next = $('.home-dd-popup-item:first');
                }
                $(next).click();
            }, 200);
        }
    }, 5000);
}
function ddInit() {
    $('.home-dd:visible').click(function () {
        clearTimeout(homedd_to);
        $('.home-dd-popup').remove();
        var offset = $('.home-dd').attr('data').split(',').indexOf($('.home-dd').text()) * $('.home-dd-popup-item').height();
        var popup = $('<div />', {class: 'home-dd-popup'}).css({
            left: $('.home-dd').position().left,
            top: $('.home-dd').position().top - offset
        });
        var items = $('.home-dd').attr('data').split(',');
        for (var i in items) {
            var item = $('<div />', {class: 'home-dd-popup-item'}).text(items[i]);
            item.click(function () {
                var offset = $('.home-dd').attr('data').split(',').indexOf($(this).text()) * $('.home-dd-popup-item').height();
                $('.home-dd-popup').animate({top: $('.home-dd').position().top - offset}, (function (text) {
                    return function () {
                        $('.home-dd-popup').fadeOut('fast', (function (text) {
                            return function () {
                                $('.home-dd-popup').remove();
                                ddSelectNext();
                            };
                        })(text));

                        $('.home-dd-carrusel').hide();
                        $('.home-dd-carrusel:eq(' + $('.home-dd').attr('data').split(',').indexOf(text) + ')').fadeIn('fast');

                        $('.home-dd').text(text);
                    };
                })($(this).text()));
            })
            popup.append(item);
        }
        popup.fadeIn('fast').appendTo($('body'));
    });
    $('.home-dd').text($('.home-dd').attr('data').split(',').shift());
    $('.home-dd-carrusel:eq(0)').show();
    ddSelectNext();
}