
$( document ).ready(function() {
    $('#open-headbar-site').click(function (e) {
        e.preventDefault();
        $('#headbar-site').toggleClass('open');
    });

    $('#profile-dropdown').click(function (e) {
        e.preventDefault();
        if ($('#profile-area').hasClass('open')) {
            $('#profile-area').removeClass('open');
        } else {
            window.requestAnimationFrame(popup);
        }
    });

    $('body').click(function (e) {
        $('#profile-area').removeClass('open');
        const headbar = event.target.closest('#open-headbar-site');
        if (!headbar) {
            $("#headbar-site").removeClass("open")
        }
        const article_div = event.target.closest('[data-article-id]');
        if (!article_div) {
            $("#article-action").remove();
        }
    });

    function popup() {
        $('#profile-area').toggleClass('open');
    }

    $('#create-new').click(function (e) {
        window.location.href = 'http://www.google.com';
    });
});
