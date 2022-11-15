<?php
session_start();
if (isset($_POST['resetData'])) {
  session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <!-- Plain Login Form for Existing User's Login  -->
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-3">Sign in</h3>
              <form>
                <label class="form-label">Email</label>
                <input type="email" id="email" class="form-control form-control-lg" />
                <label class="form-label">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" /><br>
                <button class="btn btn-primary  btn-block" type="submit" id="login">Login</button>
              </form>
              <hr class="my-4">
              <a class="btn btn-block btn-primary mb-2" style="background-color: #3b5998;" href="./registerPanel.php">Not a Memeber ? Join Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <form action="" method="POST">
    <p style="margin-left:2% ">Reset data:
      <button style="margin-left:2% " type=submit name="resetData">&#9850;</button>
    </p>
  </form>
</body>
<script src="../js/loginPanel.js"></script>

</html>