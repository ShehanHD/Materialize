$(window).on('load',function(){
    $(".preloader").addClass("complete");
    $(".load").addClass("complete");
});

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.datepicker').datepicker();
    $('.fixed-action-btn').floatingActionButton({
        hoverEnabled: false
    });
    $('.tooltipped').tooltip({
        position: 'left'
    });
    $('.scrollspy').scrollSpy();
});