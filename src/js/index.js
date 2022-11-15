//To Display all the posts on the landing page for a visitor
$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/indexLoader.php",
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
          `&emsp; ||&emsp;<i class="bi bi-hand-thumbs-up-fill">` +
          e.likes +
          `</i><hr>
            <p class="card-text">` +
          e.post +
          `</p><hr>
            <p>Author:By<b>` +
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
