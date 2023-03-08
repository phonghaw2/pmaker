$(document).ready(function () {
    $('.phong-intro').click(function (e) {
        const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

        tl.to(".slider", { y: "-100%", duration: 1.2, delay: 0.5 });
        tl.to(".phong-intro", { y: "-100%", duration: 1 }, "-=1");
    });

    $('#portfolio-pick').click(function (e) {
        $('#type').val(1);
        step_save();
    });

    $('#blog-pick').click(function (e) {
        $('#type').val(2);
        step_save();
    });

    function step_save() {
        $('#step_save').submit();
    }

});
