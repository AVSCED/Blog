//To display all the posts written by different author's for a reader to read 
$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/readerPanelLoader.php",
    data: { action: "laodPage" },
    dataType: "json",
    success: function (response) {
      console.log(response);
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
          `&emsp; ||&emsp;` +
          e.likes +
          ` <button class="btn btn-secondary likePost" id="${e.postID}"  value="${e.likes}"><i class="bi bi-hand-thumbs-up-fill " ></i>
                </button><hr>
            <p class="card-text">` +
          e.post +
          `</p><hr>
            <p>Author:<b>` +
          e.Name +
          `</b><p>
          </div>
        </div>
      </div>`;
      });
      $("#post_Area").html(string);
    },
  });
});
//To let a reader like the post
$(document).on("click", ".likePost", function () {
  var postId = $(this).attr("id");
  var likes = $(this).attr("value");
  console.log(likes);
  $.ajax({
    type: "post",
    url: "../Controller/readerPanelLoader.php",
    data: { action: "likePost", postId: postId, likes: likes },
    success: function (response) {
      console.log(response);
      location.reload();
    },
  });
});
