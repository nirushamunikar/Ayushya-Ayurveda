// $(document).ready(function () {
//     var $win = $(window);
//     var winH = $win.height();
//     $(window).scroll(function () {
//         var scroll = $(window).scrollTop();
//         if (scroll > winH) {
//             $(".main-navigation").addClass("stickHeaderNav");
//         }
//         else {
//             $(".main-navigation").removeClass("stickHeaderNav");
//         }
//     })
// });
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".main-navigation").css("background" , "#fff");
            $(".main-navigation").css("border-bottom" , "2px solid #29507b");
            $(".main-navigation li a").css("color" , "#29507b");
            $(".main-navigation li a").css("letter-spacing" , "3px");
        }

        else{
            $(".main-navigation").css("background" , "transparent");
            $(".main-navigation").css("border-bottom" , "none");
            $(".main-navigation li a").css("letter-spacing" , "3px");
            $(".main-navigation li a").css("color" , "#fff");
            $(".button li a:before").css("background-color" , "white");

        }
    })
});
$(document).ready(function() {
    // one page navigation
    $('#main_navigation_menu').onePageNav({
        currentClass: 'active'
    });

});
