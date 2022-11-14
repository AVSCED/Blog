$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/adminPanelLoader.php",
    data: { action: "adminName" },
    success: function (response) {
        response=JSON.parse(response);
    //   console.log(response);
      $("#adminName").html(response.Name);
    },
  });
//   $.ajax({
//     type: "post",
//     url: "../Controller/adminPanelLoader.php",
//     data: { action: "requests" },
//     // dataType: "dataType",
//     success: function (response) {
//       response = JSON.parse(response);
//       request_Data = "";
//       request_Data = ` <h4 class=" h4 text-dark fw-bold">You've Following request pending</h1>
//             <table class="table table-dark table-bordered" style="margin-left:2rem;"><thead>
//               <tr>
//                 <th scope="col">S.No.</th>
//                 <th scope="col">User ID</th>
//                 <th scope="col">Name</th>
//                 <th scope="col">Role Request</th>
//                 <th scope="col">Action</th>
//               </tr>
//             </thead>
//             <tbody>`;
//       c = 1;
//       response.forEach((e) => {
//         request_Data += ` <tr>
//                                 <th scope="row">${c++}</th>
//                                 <td>${e.ID}</td>
//                                 <td>${e.Name}</td>
//                                 <td>${e.Role}</td>
//                                 <td><p> <button class="btn btn-secondary approve" id=${
//                                   e.ID
//                                 }>
//                                 <i class="bi  bi-check-circle" style="font-size:1rem"></i></button>
//                                 <button class="btn btn-secondary decline" id=${
//                                   e.ID
//                                 }><i class="bi bi-file-excel"  style="font-size:1rem"></i></button>
//                                 </p></td>
//                                  </tr>`;
//       });
//       request_Data += `  </tbody></table>`;
//       $("#content_Area").html(request_Data);
//     },
//   });
});
$(document).on("click" , ".approve" , function(){
    userID=$(this).attr("id");
    console.log(userID);
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: {action:"approveRequest" , userID:userID},
        success: function (response) {
            console.log(response);
            alert(response);
            location.reload();
        }
    });
});
$(document).on("click" , ".decline" , function(){
    userID=$(this).attr("id");
    console.log(userID);
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: {action:"declineRequest" , userID:userID},
        success: function (response) {
            console.log(response);
            alert(response);
            location.reload();
        }
    });
});
$(document).on("click" , "#requests" ,function(){
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: { action: "requests" },
        success: function (response) {
          response = JSON.parse(response);
          request_Data = "";
          request_Data = ` <h4 class=" h4 text-dark fw-bold">You've Following request pending</h1>
                <table class="table table-dark table-bordered" style="margin-left:2rem;"><thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role Request</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>`;
          c = 1;
          response.forEach((e) => {
            request_Data += ` <tr>
                                    <th scope="row">${c++}</th>
                                    <td>${e.ID}</td>
                                    <td>${e.Name}</td>
                                    <td>${e.Role}</td>
                                    <td><p> <button class="btn btn-secondary approve" id=${
                                      e.ID
                                    }>
                                    <i class="bi  bi-check-circle" style="font-size:1rem"></i></button>
                                    <button class="btn btn-secondary decline" id=${
                                      e.ID
                                    }><i class="bi bi-file-excel"  style="font-size:1rem"></i></button>
                                    </p></td>
                                     </tr>`;
          });
          request_Data += `  </tbody></table>`;
          $("#content_Area").html(request_Data);
        },
      });
});

$(document).on("click" , "#usersPosts" , function(){
    console.log("Hi");
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: { action: "allAuthorPosts" },
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
            <p>Author:By<b>`+e.Name+`</b> <p><vr> <button class="btn btn-secondary deletePost" style="font-size:1rem" id=${e.postID}><i class="bi bi-trash"></i></button>
          </div>
        </div>
      </div>`;
            });
            $("#content_Area").html(string);
         
        },
      });
});

$(document).on("click" , ".deletePost" , function(){
    postId=$(this).attr("id");
    console.log(postId);
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: { action: "deletePost" ,postId:postId },
        success: function (response) {
            console.log(response);
            alert(response);
            location.reload();
        }
    });
});

$(document).on("click" , "#userList" , function (){
    $.ajax({
        type: "post",
        url: "../Controller/adminPanelLoader.php",
        data: { action: "allUserList" },
        success: function (response) {
          response = JSON.parse(response);
          request_Data = "";
          request_Data = ` <h4 class=" h4 text-dark fw-bold">You've Following request pending</h1>
                <table class="table table-dark table-bordered" style="margin-left:2rem;"><thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Emmail</th>
                    <th scope="col">Role </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>`;
          c = 1;
          response.forEach((e) => {
            request_Data += ` <tr>
                                    <th scope="row">${c++}</th>
                                    <td>${e.ID}</td>
                                    <td>${e.Name}</td>
                                    <td>${e.Email}</td>
                                    <td>${e.Role}</td>
                                    <td><p><button class="btn btn-secondary deleteUser" id=${e.ID}>
                                    <i class="bi bi-file-excel"  style="font-size:1rem"></i></button>
                                    </p></td>
                                     </tr>`;
          });
          request_Data += `  </tbody></table>`;
          $("#content_Area").html(request_Data);
        },
      });
});

$(document).on("click",".deleteUser",function(){
    userID=$(this).attr("id");
    console.log(userID);
    confirm ("Do Your Really Want To Delete This User's Account ?");
    if (confirm){
        $.ajax({
            type: "post",
            url: "../Controller/adminPanelLoader.php",
        data: { action: "deleteUserAccount" ,userID:userID },
            success: function (response) {
                console.log(response);
                alert(response);
                confirm("Do You Want To remove This User's Blog form Your Sites ?");
                if(confirm){
                    console.log("Yse");
                    $.ajax({
                        type: "post",
                        url: "../Controller/adminPanelLoader.php",
                        data: { action: "deleteUserBlogs" ,userID:userID },
                        dataType: "dataType",
                        success: function (response) {
                            alert(rsponse);
                        }
                    });
                }else{
                    console.log("NO");
                }
            }
        });
        }
})