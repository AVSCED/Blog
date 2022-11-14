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

  <!-- CSS only -->
  
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" src="../css/adminPanel.css" />
  <style>
    .offcanvas {
      visibility: visible !important;
    }

    .side_sticky {
      text-align: center;
      font-size: 1rem;
      border-radius: 5px;
      background-color: rgb(249, 242, 242);
      padding: 0px !important;
    }

    .side_sticky .nav-item {
      border-bottom: 1px solid #e3e3e3;
      color: lightgray;
    }

    @media screen and (max-width: 1000px) {
      #floatRightBar {
        display: none;
      }
    }
  </style>
</head>

<body>
  <!-- Top Navbar -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <!-- Navbar brand -->

      <img src="./assets/siteLogo.jpeg" height="48" alt="" loading="lazy" style="margin-top: -3px" />

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
            <form method="POST" >
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
  <div id="intro" class="p-5 text-center bg-light">
    <h1 class="p-3 h2 text-dark fw-bold">Welcome Author <b id="user_Name"></b>&nbsp;<i class="bi bi-emoji-smile-fill text-dark h2"></i></h1>

  </div>
  <!-- Jumbotron -->

  <!-- SIDE FLOAT START-->
  <nav class="navbar sticky-top navbar-light shadow p-3 side_sticky float-start " id="floatRightBar">
    <ul class="nav flex-column ">
      <li class="nav-item">
        <button class="btn btn-outline-white text-dark" id="new_Post"><i class="bi bi-pen"></i>New Post</button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-white text-dark" id="author_All_Post"><i class="bi bi-eye"></i>Pervious Posts</button>
      </li>

    </ul>
  </nav>

  <!-- SIDE FLOAT END-->

  <!--Main Navigation-->

  <!--Main layout-->

  <div class="container " style="height: auto">
    
    <!--Section: Content-->
    <section class="text-center" >
    <div class="row" id="post_Area" >

    </div>
      <!-- <h4 class=" text-dark"><strong>Share Your Thoughts !</strong></h4>

      <div class="form-group ">
        <label class="fw-bold text-dark">Blog Category:</label>

        <select class="btn btn-outline-dark " id="blog_Category">
          <option class="btn btn-outline-dark " label="food">Food </option>
          <option class="btn btn-outline-dark " label="travel">Travel</option>
          <option class="btn btn-outline-dark " label="health">Health</option>
          <option class="btn btn-outline-dark " label="lifestyle">Lifestyle </option>
        </select>
        <label class="fw-bold text-dark"> Enter Title
          <input type="text" class="form-control btn-outline-dark" id="blog_Title"></label><br><br>
        <textarea class="form-control  btn-outline-dark" id="blog_Content" rows="3"></textarea>
        <div class="custom-file text-center"><br>
          <p class="btn btn-outline-dark">
            <input type="file" class="custom-file-input" id="blog_Image">
          </p>
        </div>
        <button class="btn btn-primary" id="post_Btn"> Post</button>
      </div> -->

    </section>
    <!--Section: Content-->

    <!-- Pagination -->
    <!-- <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav> -->
  </div>

  <!--Main layout-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <!-- <div class="py-4 text-center">

    </div>

    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">

    </div> -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2020 Copyright:
      <a class="text-dark" href="">CEDCOSS Technologies</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
</body>
<script src="../js/authorPanel.js"></script>

</html>