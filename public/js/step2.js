$(document).ready(function () {
    $('.f-next').click( function( event ) {
        $('.card').addClass('flipped');
        if ($('.p-func-left').hasClass('f-show')) {
            step_save();
        } else {
            $('.p-func-left').addClass('f-show');
        }
    });

    $('.f-prev').click( function( event ) {
        $('.card').removeClass('flipped');
        $('.p-func-left').removeClass('f-show');
    });

    function step_save() {
        $('#step_save').submit();
    }
});
