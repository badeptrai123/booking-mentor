$(function () {
  // rome(inline_cal, { time: false });

  rome(inline_cal, { time: false, inputFormat: "MMMM DD, YYYY" }).on(
    "data",
    function (value) {
      result.value = value;
    }
  );
});
//Select time
$(".select-time .time").on("click", function () {
  $(".select-time .time").removeClass("active");
  $(this).addClass("active");
  return false;
});
