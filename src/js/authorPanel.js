let content_Area = "";
let posts = [];
//To Display the logged in user's name on login
$(document).ready(function () {
  $("#post_Area").html(content_Area);
  $.ajax({
    type: "POST",
    url: "../Controller/authorPanelLoader.php",
    data: { action: "load" },
    dataType: "json",
    success: function (response) {
      $("#user_Name").html(response.Name);
    },
  });
});
//To let a author Post a new article
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
          <button class="btn btn-primary" id="post_Btn"> Post</button>
      </div>
    </section>`;
  $("#post_Area").html(content_Area);
});
//To Post the newly written article by the author
$(document).on("click", "#post_Btn", function () {
  var blog_Title = $("#blog_Title").val();
  var blog_Content = $("#blog_Content").val();
  var blog_Category = $("#blog_Category").val();
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: {
      action: "blog",
      blog_Title: blog_Title,
      blog_Content: blog_Content,

      blog_Category: blog_Category,
    },
    success: function (response) {
      alert(response);
      location.reload();
    },
  });
});
//To Let a author view all his previous posts
$(document).on("click", "#author_All_Post", function () {
  $("#post_Area").html(
    "<strong>You Haven't Posted Anything Yet. Come Let's Share Your Thoughts</strong>"
  );
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: { action: "previous_Blogs" },
    dataType: "json",
    success: function (response) {
      if (response.length >= 1) {
        posts = response;
        let string = "";
        posts.forEach((e) => {
          string +=
            `<div class="col-lg-4 col-md-12 mb-4 btn-outline-dark">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title">` +
               e.title +
              `&nbsp;(` +
               e.category +
              `)</h5>` +
               e.date +
              `&emsp; ||&emsp;<i class="bi bi-hand-thumbs-up-fill">` +
               e.likes +
              `</i><hr>
               <p class="card-text">` +
               e.post +
              `</p><hr>
               <p><button class="btn btn-secondary editBlog" id="${e.postID}"><i class="bi bi-pen"></i></button> &nbsp;
               <form><button class="btn btn-secondary deleteBlog"  id="${e.postID}"><i class="bi bi-trash"></i></button><form><p>
               </div>
               </div>
             </div>`;
        });
        $("#post_Area").html(string);
      }
    },
  });
});
//To let a author edit his previously written blog
$(document).on("click", ".editBlog", function () {
  postId = $(this).attr("id");
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: { postId: postId, action: "editPost" },
    success: function (response) {
      response = JSON.parse(response);
      content_Area = `<section class="text-center">
    <h4 class=" text-dark"><strong>Share Your Thoughts !</strong></h4>
    <div class="form-group ">
      <label class="fw-bold text-dark">Blog Category:</label>
      <select class="btn btn-outline-dark " id="edit_blog_Category">
        <option class="btn btn-outline-dark " label="${response.category} ">${response.category} </option>
      </select>
      <label class="fw-bold text-dark"> Enter Title
        <input type="text" class="form-control btn-outline-dark" id="edit_blog_Title" value="${response.title}"></label><br><br>
      <textarea class="form-control  btn-outline-dark" id="edit_blog_Content" rows="3"> ${response.post}</textarea>
      <span class="edit_blog_id" id="${response.postID}"></span>
      <button class="btn btn-primary" id="edit_Btn"> Post</button>
    </div>
    </section>`;
      $("#post_Area").html(content_Area);
    },
  });
});
//To post the edited blog
$(document).on("click", "#edit_Btn", function () {
  postId = $(this).attr("id");
  var edit_blog_Title = $("#edit_blog_Title").val();
  var edit_blog_Content = $("#edit_blog_Content").val();
  var edit_blog_Category = $("#edit_blog_Category").val();
  var edit_blog_id = $(".edit_blog_id").attr("id");
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: {
      action: "edited_blog",
      edit_blog_Title: edit_blog_Title,
      edit_blog_Content: edit_blog_Content,
      edit_blog_Category: edit_blog_Category,
      edit_blog_id: edit_blog_id,
    },
    success: function (response) {
      alert(response);
      location.reload();
    },
  });
});
//To Let the author delete his previously written blog
$(document).on("click", ".deleteBlog", function () {
  postId = $(this).attr("id");
  $.ajax({
    type: "post",
    url: "../Controller/authorPanelLoader.php",
    data: { postId: postId, action: "deletBlog" },
    success: function (response) {
      alert(response);
      location.reload();
    },
  });
});
