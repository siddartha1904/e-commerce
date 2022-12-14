const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


function validation(){
  var name = document.forms["myform"]["fname"].value;
  var username = document.forms["myform"]["uname"].value;
  var Email = document.forms["myform"]["email"].value;
  var cell = document.forms["myform"]["cell"].value;
  var password = document.forms["myform"]["password"].value;
  if( name == "" || name == null ){
swal("Invalid Name","Name cannot be empty","warning");
return false;
}
else if (username == ""|| username == null){
swal("User Name cannot be Empty");
return false;
}
else if (Email == ""|| Email == null){
swal("Enter a valid email address");
return false;
}
else if (cell == "" || cell == null || isNaN(cell) || cell.length > 10 || cell.length < 10){
swal("Enter a valid contact Number");
return false;
}
else if (password.length < 8 || password.search(/[a-z]/i) < 0 ||password.search(/[0-9]/) < 0){
  swal("Invalid Password Type!", "Your password must be at least 8 characters,\n contain at least one letter and\n contain at least one digit.", "warning");
 
  return false;
}
else{
  swal("Good job!", "Details Submitted Succesfully!", "success");
    }
  }

 