$(document).ready(function () {
  $(window).resize(function () {
    $("#header ul#menu-responsive").slideUp(200);
    $("#header ul#menu-responsive ul#sub-menu").slideUp(200);
    $("#header ul#menu-responsive li .toggle-sub-menu").removeClass("open");
  });
  $(window).scroll(function () {
    $("#header ul#menu-responsive").slideUp(200);
    $("#header ul#menu-responsive ul#sub-menu").slideUp(200);
    $("#header ul#menu-responsive li .toggle-sub-menu").removeClass("open");
  });
  $("#header .container .bars").click(function () {
    $("#header ul#menu-responsive").slideToggle(200);
  });

  $("#header ul#menu-responsive li .toggle-sub-menu").click(function () {
    $(this).next("ul#sub-menu").slideToggle(200);
    $(this).toggleClass("open");
  });
});
