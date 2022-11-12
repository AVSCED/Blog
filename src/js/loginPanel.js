$(document).ready(function () {});

$(document).on('click', "#login",function () {
  var fg = 0;
  var email = $("#email").val();
  var password = $("#password").val();
  $.ajax({
    type: "POST",
    url: "../Controller/loginUser.php",
    data: { email: email, password: password },
    dataType: "JSON",
    success: function (response) {
        console.log(response);
      if (response[0]["Request"] == 1) {
        fg = 1;
        if (response[0].Role == "author") {
          document.location = "../View/authorPanel.php";
        } else if (response[0].Role == "admin") {
          document.location = "../View/adminPanel.php";
        } else if (response[0].Role == "reader") {
          document.location = "../View/readerPanel.php";
        }
      }
      if (response[0].Request==0) {
        alert(
          "We haven't Recieved approval from our Admin About your registration process yet , Sorry for the inconvinience , Feel free to browse through our artilces until then, Thank you."
        );
        document.location = "../index.php";
      }
    },
  });
});
