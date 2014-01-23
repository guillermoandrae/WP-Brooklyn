$(function(){
    $(".primary-nav").shadowify();
    $("a").windowify();
    $(".nav-close, .nav-toggle").click(function(){
        $(".primary-nav").slideToggle();
    });
});