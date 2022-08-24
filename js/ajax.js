$(document).ready(function () {
  $("#wish_mamah").load("tampilPesan.php");
  $("#btn_mamah").click(function () {
    var data = $("#formAdd").serialize();
    $.ajax({
      type: "POST",
      url: "tambahPesan.php",
      data: data,
      cache: false,
      success: function (data) {
        $("#wish_mamah").load("tampilPesan.php");
        $("#formAdd")[0].reset();
      },
    });
  });
});

$(document).ready(function () {
  $("#wish_me").load("tampilPesan.php");
  $("#btn_me").click(function () {
    var data = $("#formAdd").serialize();
    $.ajax({
      type: "POST",
      url: "tambahPesan.php",
      data: data,
      cache: false,
      success: function (data) {
        $("#wish_me").load("tampilPesan.php");
        $("#formAdd")[0].reset();
      },
    });
  });
});
