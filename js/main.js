$(function () {

//     $('header').height($(window).height());
//     $(window).on('resize' , function () {
//         $('header').height($(window).height());
//     })

})

$(".navbar .container .collapse ul li ").click(function() {
    $(this).siblings().removeClass("active");    /*siblings يعني اشقاء */
    $(this).addClass("active"); 
})


