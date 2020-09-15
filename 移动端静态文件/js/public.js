$(function () {
    resize();
    $(window).resize(function () {
        resize();
    })
    function resize() {
        const winWith = $(window).width()/10;
        $("html").css("font-size",winWith);
    }
})