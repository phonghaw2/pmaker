$(document).ready(function () {
    $('.f-next').click( function( event ) {
        $('.card').addClass('flipped');
        if ($('.p-func-left').hasClass('f-show')) {
            // step_save();
            $('.f-next').addClass('submit');
        } else {
            $('.p-func-left').addClass('f-show');
        }
    });

    $('.f-prev').click( function( event ) {
        $('.card').removeClass('flipped');
        $('.p-func-left').removeClass('f-show');
        $('.f-next').removeClass('submit');
    });

    $(document).on("click",".submit", function() {
        step_save();
    });

    function step_save() {
        $('#step-save').submit();
    }

});
