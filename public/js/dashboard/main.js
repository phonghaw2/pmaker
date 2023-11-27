
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



    $("#message-content").on('keydown', function(ev) {
        if (ev.keyCode === 13) {
            let context = this.children.message.innerHTML;
            if (context == '') {
                return;
            } else {
                let incoming_id = this.parentElement.parentElement.children.incoming_id.value;
                send_message(incoming_id, context);
            }
        }
    });

    function send_message(imcoming_id, context) {
        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {

            }
        });
    }
    $('#test-chat').submit(function (e) {
        e.preventDefault();
        console.log('submit');
    });
});
