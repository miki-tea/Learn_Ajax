$(function() {
  $(".form").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "ajax.php",
      data: {
        food: $(".js-getValFood").val(),
        station: $(".js-getValPlace").val()
      }
    }).done(function(data, status) {
      console.log(data);
      console.log(status);
      $(".ajaxInput").html(data);
    });
  });

  $(".btn__add").click(function() {
    $("#add").load("add.html", function() {
      console.log("文字を大きくします！");
      setTimeout(function() {
        $("#add").css("font-size", "30px");
      }, 500);
    });
  });
});
