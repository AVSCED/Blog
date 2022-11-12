let content_Area ="";
$(document).ready(function () {
  $("#post_Area").html(content_Area);

  $.ajax({
    type: "POST",
    url: "../Controller/authorPanelLoader.php",
    data: { action: "load" },
    dataType: "json",
    success: function (response) {
      console.log(response.Name);
      $("#user_Name").html(response.Name);
    },
  });
});

$(document).on("click", "#new_Post", function () {
  content_Area = `<section class="text-center">
    <h4 class=" text-dark"><strong>Share Your Thoughts !</strong></h4>
    
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
    </div>
    
    </section>`;
  $("#post_Area").html(content_Area);
});

$(document).on("click", "#post_Btn", function () {
  var blog_Title = $("#blog_Title").val();
  var blog_Content = $("#blog_Content").val();
  var blog_Image = $("#blog_Image").val();
  var blog_Category = $("#blog_Category").val();

  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: {
      action: "blog",
      blog_Title: blog_Title,
      blog_Content: blog_Content,
      blog_Image: blog_Image,
      blog_Category: blog_Category,
    },
    success: function (response) {
      alert(response);
    },
  });
});

$(document).on("click", "#author_All_Post", function () {
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: {action:"previous_Blogs"},
    
    success: function (response) {
      console.log(response);
      content_Area=response;
    }
  });
  response.forEach(e => {

    content_Area=`<div class="row">
    <div class="col-lg-4 col-md-12 mb-4">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Post title</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the
            card's content.
          </p>
          <a href="#!" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Post title</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the
            card's content.
          </p>
          <a href="#!" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Post title</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the
            card's content.
          </p>
          <a href="#!" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div> 
  </div>`
  });
  $("#post_Area").html(content_Area);
});
$(document).on("click", "#reported_Content", function () {
  $("#post_Area").html("We'll Be loading soon!");
});
