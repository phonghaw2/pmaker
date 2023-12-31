$(document).ready(function () {
    // $('.form-info').submit(false);

    //------------Social Field-----------//
    const socialDiv = $('#social-div');

    $(document).on("click",".dropdown", function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $(this).parent().parent().find("ul").removeClass('show-up');
        } else {
            $('.dropdown').removeClass('active')
            $('.select-icon-ul').removeClass('show-up')
            $(this).addClass('active');
            $(this).parent().parent().find("ul").addClass('show-up');
        }
    });

    $("body").click(function(){
        const dropdown = event.target.closest('.choose-icon');
        const choosing = event.target.closest('.btn-social');
        if (!dropdown) {
            $(".dropdown").removeClass("active")
            $('.select-icon-ul').removeClass('show-up')
        }
        if (!choosing) {
            $(".btn-social").removeClass("choosing")
        }
    });

    $('.btn-social').click( function( event ) {
        event.preventDefault();
        $(this).addClass('choosing');
    });

    $('.basebtn-content-link img').click( function( event ) {
        let platform = $(this).data("platform");
        renderSocialField(platform);
        $(this).remove();
    });

    $('[data-pick-platform]').click( function( event ) {
        let platform = $(this).data("pick-platform");
        let img_path = $(this).data("image-src");
        $('#choose-image-' + platform).attr('src', img_path);
        $('#image_' + platform)[0].value = img_path;
    });

    function renderSocialField(platform) {
        $.ajax({
            type: "GET",
            url: '/api/render-social',
            data: {'platform' : platform},
            dataType: 'json',
            success: function (response) {
                const field = document.createElement('div');
                field.setAttribute('class', 'p-social');
                field.innerHTML = response.data;
                socialDiv.append(field);
            }
        });
    }

    // $(document).on("click",".submit", function() {
    //     document.getElementById("step-save").submit();
    //     // step_save();
    // });

    $('.f-next').click( function( event ) {
        document.getElementById("step-save").submit();
    });

});

