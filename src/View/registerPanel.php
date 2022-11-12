<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

</head>

<body>
  <!-- To Let a new User Register with new credentials -->
  <div class="container bg-white">
    <section class="vh-100">
      <div class="container py-5 h-90">
        <p class="fw-bold fs-2 text-center">New User ? Come Join Us !</p>
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image" />
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <label class="form-label">Enter Your Name</label>
            <input type="text" id="new_User_Name" class="form-control form-control-lg" required="required" />

            <label class="form-label">Email address</label>
            <input type="email" id="new_User_Email" class="form-control form-control-lg" required="required" />

            <label class="form-label">Password</label>
            <input type="password" id="new_User_Pass" class="form-control form-control-lg" required="required" />

            <label class="form-label">Confirm Password</label>
            <input type="password" id="new_User_CPass" class="form-control form-control-lg" required="required" />
            <br>

            <div class="d-flex justify-content-center align-items-center mb-4">
              <!-- Checkbox -->

              <label class="form-outline"><strong>Register As --</strong>
              </label>
              <select class="btn btn-primary" id="category" required="required">
                <option value="reader">Reader</option>
                <option value="author">Author</option>
              </select>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block" id="registerUser">
              Register
            </button>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="./loginPanel.php" role="button">
                <i class="fab fa-facebook-f me-2"></i>Already a Member ?
                <b>Login</b>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
<script src="../js/registerPanel.js"></script>

</html>