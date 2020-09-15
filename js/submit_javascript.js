// Submit form with id function.
function submit_by_id() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
if (validation()) // Calling validation function
{
document.getElementById("form_id").submit(); //form submission
alert(" Name : " + name + " n Email : " + email + " n Form Id : " + document.getElementById("form_id").getAttribute("id") + "nn Form Submitted Successfully......");
}
}

// Name and Email validation Function.
function validation() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
if (name === '' || email === '') {
alert("Please fill all fields...!!!!!!");
return false;
} else if (!(email).match(emailReg)) {
alert("Invalid Email...!!!!!!");
return false;
} else {
return true;
}
}