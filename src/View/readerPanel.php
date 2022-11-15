<?php
session_start();

if (!isset($_SESSION['data'])) {
  header("Location:../index.php");
}

if (isset($_POST['logout_Session'])) {
  session_destroy();
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog Site</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- CSS only -->
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" src="./css/styles.css" />

</head>
<?php
session_start();
?>

<body>
  <!-- Top Navbar -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <img src="./assets/siteLogo.jpeg" height="48" alt="" loading="lazy" style="margin-top: -3px;" />
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link fw-bold text-dark" aria-current="page" href="#intro">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <!-- Icons -->
          <li class="nav-item me-3 me-lg-0">
            <form method="POST">
              <button class="btn btn-outline-white text-dark" style="font-size:1rem;" name="logout_Session">
                <strong>Logout</strong> &nbsp;<i class="fa-solid fa-user-lock" style="font-size:1.5rem;"></i>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Jumbotron -->
  <div id="intro" class="p-5  text-center bg-light">
    <h1 class="mb-3 p-4 h2 text-dark fw-bold">Welcome To Our Blog Site Reader <i class="bi bi-emoji-smile-fill text-dark"></i> </h1>
    <p class="mb-3 text-dark">Curate Through our best content !</p>
  </div>
  <!-- Jumbotron -->
  <!--Main Navigation-->
  <!--Main layout-->
  <div class="container ">
    <!--Section: Content-->
    <section class="text-center">
      <div class="row" id="post_Area">
      </div>
    </section>
  </div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://cedcoss.com/">CEDCOSS Technologies</a>
  </div>
  <!-- Copyright -->
  </footer>
  <!--Footer-->
</body>
<script src="../js/readerPanel.js"></script>

</html>