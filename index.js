$(function() {
  $(".form").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "ajax.php",
      data: {
        val: $(".js-getVal").val()
      }
    }).done(function(data, status) {
      console.log(data);
      console.log(status);
      $(".ajaxInput").html(data);
    });
  });
});
