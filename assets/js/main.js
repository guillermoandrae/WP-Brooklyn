$(function(){
    $(".primary-nav").shadowify();
    $("a").windowify();
    $(".nav-toggle").click(function(){
        $(".primary-nav").slideToggle();
    });
});