$(document).ready(function () {});

$(document).on("click" , "#registerUser" ,function () {
  var new_User_Name = $("#new_User_Name").val();
  var new_User_Email = $("#new_User_Email").val();
  var new_User_Pass = $("#new_User_Pass").val();
  var new_User_CPass = $("#new_User_CPass").val();
  var role = $("#category").val();

  if (new_User_Pass == new_User_CPass) {
    $.ajax({
      type: "post",
      url: "../Controller/registerUser.php",
      data: {
        new_User_Name: new_User_Name,
        new_User_Email: new_User_Email,
        new_User_Pass: new_User_Pass,
        role: role,
      },
      success: function (response) {
        console.log(response);
        if(response == 1){
          alert("Welcome ! Your Request was submitted Successfully ,Kindly wait for Our Admin's Approval on your request. Meanwhile Read our Posted Articles");
          document.location = "../index.php";
        }
        else if(response == 0){
          alert("A User With this Email already Exists try a different Email.");
        }        
      },
    });
  } else {
    alert("Password Didn't Match , Please Enter Correct Password ");
  }
});
