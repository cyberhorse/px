$(document).ready(function() {
    $('body').on('click', 'a.ajax', function(e) {
        e.preventDefault();

        var target = getTarget($(this));
        $(target).load($(this).attr('href'));
    });

    $('body').on('submit', 'form', function(e) {
        e.preventDefault();

        var target = getTarget($(this));
        $.post($(this).attr('action'), $(this).serialize(), function(html) {
            $(target).html(html)
        })
    });
});

function getTarget(el) {
    var target = '#container';
    if ($(el).data('target')) {
        target = $(el).data('target');
    }

    return target;
}

function share_fb(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626,height=436")
}