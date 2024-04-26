$(document).ready(function(){
    $("#signup_btn").click(function(){
        $("#main").animate({left:"22.5%"},400);
        $("#main").animate({left:"30%"},500);
        $("#loginform").css("visibility","hidden");
        $("#loginform").animate({left:"25%"},400);

        $("#signupform").animate({left:"17%"},400);
        $("#signupform").animate({left:"30%"},500);
        $("#signupform").css("visibility","visible");
    });

    $("#login_btn").click(function(){
        $("#main").animate({left:"77.5%"},400);
        $("#main").animate({left:"70%"},500);
        $("#signupform").css("visibility","hidden");
        $("#signupform").animate({left:"75%"},400);

        $("#loginform").animate({left:"83.5%"},400);
        $("#loginform").animate({left:"70%"},500);
        $("#loginform").css("visibility","visible");
    });
});

$(document).on("click", "a", function () {

    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
    }

    // now, fadeout the html (whole page)
    $("html").fadeOut("slow","swing",function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });

    // prevent the default browser behavior.
    return false;
});



