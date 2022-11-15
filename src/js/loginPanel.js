$(document).ready(function () {});
//To Let a user login into his account and redirect him to his respective page as per his role
$(document).on("click", "#login", function () {
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
        if (response[0].Role == "author") {
          document.location = "../View/authorPanel.php";
        } else if (response[0].Role == "admin") {
          document.location = "../View/adminPanel.php";
        } else if (response[0].Role == "reader") {
          document.location = "../View/readerPanel.php";
        } else if (response[0].Request == 0) {
          alert(
            "We haven't Recieved approval from our Admin About your registration process yet , Sorry for the inconvinience , Feel free to browse through our artilces until then, Thank you."
          );
          document.location = "../index.php";
        }
      } else {
        alert(
          "Couldn't find your details , make sure your entered correct email and password"
        );
      }
    },
  });
});
