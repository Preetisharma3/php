// *------------------------------------//
//         EDWARD LOGIN API             //
// *------------------------------------//
getuser();
function postData() {
  var form = document.getElementById("formData");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    AdminUserName = document.getElementById("Username").value;
    AdminPassword = document.getElementById("Password").value;
    let data = [AdminUserName, AdminPassword];
    console.log(data);
    fetch("http://localhost/lumen/blog/public/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((data) => {
        window.location.href = "./dashboard.php";
        console.log("Success:", data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

//--------------------------------------//
//        FETCH USERS POST API         //
//------------------------------------//

function userpostdata() {
  // debugger;
  usersname = document.getElementById("fname").value;
  usersemail = document.getElementById("email").value;
  usersname = document.getElementById("username").value;
  userspassword = document.getElementById("password").value;
  usersphone = document.getElementById("phone").value;
  usersroletype = document.getElementById("roletype").value;
  usersstatus = document.getElementById("status").value;
  console.log(
    usersname,
    usersemail,
    usersname,
    userspassword,
    usersphone,
    usersroletype,
    usersstatus
  );
  fetch("http://localhost/lumen/blog/public/postusers", {
    method: "POST",
    body: JSON.stringify({
      name: usersname,
      email: usersemail,
      username: usersname,
      phone: usersphone,
      roletype: usersroletype,
      status: usersstatus,
    }),
    headers: { "Content-type": "application/json", Accept: "*/*" },
  })
    .then(function (data) {
      //   console.log(data);
      window.location.reload();

      return data.json();
    })
    .then(function (data) {
      //   console.log(data);
    });
}

// --------------------------------------------//
//          FETCH USERS GET- APT              //
//-------------------------------------------//

function getuser() {
  url = "http://localhost/lumen/blog/public/Getuser";
  document.getElementById("show").innerHTML = "";
  fetch(url)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      data.forEach(function (items, index) {
        var html1 = "";
        var id = items.id;
        html1 = `<tr>
                            <td>${items.id}</td>
                            <td>${items.name}</td>
                            <td>${items.email}</td>
                            <td>${items.username}</td>
                            <td>${items.phone}</td>
                            <td>${items.roletype}</td>
                            <td>${items.status}</td>
                            <td>
                                <button type="button" class="btn mx-1" name="edit"  id="update1" onclick="editData(${id})" data-toggle="modal" data-target="#exampleModal1">
                                    <i class="fa fa-pencil text-warning"></i>
                                </button>
                                <button type="button" class="btn mx-2" name="delete" onclick="deleteuserlist(${id})">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                           `;
        document.getElementById("show").innerHTML += html1;
      });
    });
}

// ----------------------------------------//
//             UPDATE  USER API           //
//---------------------------------------//

function editData(id) {
  var firstname = document.getElementById("fname1");
  var firstemail = document.getElementById("email1");
  var firstusername = document.getElementById("username1");
  var firstpassword = document.getElementById("password1");
  var firstphone = document.getElementById("phone1");
  var firstroletype = document.getElementById("roletype1");
  var firststatus = document.getElementById("status1");

  url = `http://localhost/lumen/blog/public/singleUser/${id}`;
  fetch(url)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      firstname.value = data.name;
      firstemail.value = data.email;
      firstusername.value = data.username;
      firstpassword.value = data.password;
      firstphone.value = data.phone;
      firstroletype.value = data.roletype;
      firststatus.value = data.status;
    });

 
}


function updateUser(id) {
  console.log(id);
  usersname1 = document.getElementById("fname1").value;
  usersemail1 = document.getElementById("email1").value;
  usersname1 = document.getElementById("username1").value;
  userspassword1 = document.getElementById("password1").value;
  usersphone1 = document.getElementById("phone1").value;
  usersroletype1 = document.getElementById("roletype1").value;
  usersstatus1 = document.getElementById("status1").value;
  console.log(
    usersname1,
    usersemail1,
    usersname1,
    userspassword1,
    usersphone1,
    usersroletype1,
    usersstatus1
  );
  fetch(`http://localhost/lumen/blog/public/products${id}`, {
    method: "PUT",
    body: JSON.stringify({
      name: usersname1,
      email: usersemail1,
      username: usersname1,
      password: userspassword1,
      phone: usersphone1,
      roletype: usersroletype1,
      status: usersstatus1,
    }),
    headers: { "Content-type": "application/json; charset=UTF-8" },
  })
    .then(function (data) {
      return data.json();
    })
    .then(function (data) {
      console.log(data);
      location.href = "footer.php";
    });
   updateIdinput(id);
}



function updateIdinput(id) {
   document.getElementById("formData1").innerHTML = `
      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick = "updateUser(${id})">Save</button>`;
}




//---------------------------------------------//
//           DELETE USER FROM LIST            //
//-------------------------------------------//

function deleteuserlist(id) {
  fetch(`http://localhost/lumen/blog/public/deleteuserlist${id}`, {
    method: "DELETE",
    headers: { "Content-type": "application/json; charset=UTF-8" },
  })
    .then((res) => {
      window.location.reload();
      return res.json();
    })
    .then((data) => {
      
      alert("Do you want to Delete this data?");
    });
}

// ---------------------------------------------------//
//               FETCH USER-SEARCH API              //
//-------------------------------------------------//
//

function searchshow() {
  console.log("e");
  var keyword = document.getElementById("searchfield").value;
  if (keyword == "") {
    getuser();
    return;
  }
  const url = `http://localhost/lumen/blog/public/searchUser?q=${keyword}`;
  fetch(url)
    .then((response) => response.json())
    .then((jsonData) => {
      jsonData.forEach((element) => {
        element.forEach((items) => {
          document.getElementById("show").innerHTML = `<tr>
                            <td>${items.id}</td>
                            <td>${items.name}</td>
                            <td>${items.email}</td>
                            <td>${items.username}</td>
                            <td>${items.phone}</td>
                            <td>${items.roletype}</td>
                            <td>${items.status}</td>
                            <td>
                                <button type="button" class="btn mx-1" name="edit">
                                    <i class="fa fa-pencil text-warning"></i>
                                </button>
                                <button type="button" class="btn mx-2" name="delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
          `;
        });
      });
    });
}
