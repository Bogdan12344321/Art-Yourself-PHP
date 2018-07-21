$(window).on('scroll',function(){
    if($(window).scrollTop){
        $('nav').addClass('black');
    }
    else
    {
        $('nav').removeClass('black');
    }

})
$(document).ready(function(){
    $(".art-images img").hover(function(){
        $(this).addClass('.effect');
    }, function(){
        $(this).css("width", "100%");
    });
});