<script>
function validate()
{
  var login = document.getElementById("login");
  var pass = document.getElementById("pass");
  var pass2 = document.getElementById("pass2");
  var name = document.getElementById("name");
  var email = document.getElementById("email");

  if (!login.value)
  {
    login.style.border = "2px solid red";
    document.getElementById('loginError').innerHTML=("Login required");
    return false;
  }
  if (!pass.value)
  {
    pass.style.border = "2px solid red";
    document.getElementById('passError').innerHTML=("Password required");
    return false;
  }
  if (!pass2.value)
  {
    pass2.style.border = "2px solid red";
    document.getElementById('pass2Error').innerHTML=("Confirm password required");
    return false;
  }
  if (!name.value)
  {
    name.style.border = "2px solid red";
    document.getElementById('nameError').innerHTML=("Name required");
    return false;
  }
  if (!email.value)
  {
    email.style.border = "2px solid red";
    document.getElementById('emailError').innerHTML=("Email required");
    return false;
  }
  if (login.value.length<6)
  {
    login.style.border = "2px solid red";
    document.getElementById('loginError').innerHTML=("Login must contain 6 or more characters");
    return false;
  }
  if (pass.value.length<6)
  {
    pass.style.border = "2px solid red";
    document.getElementById('loginError').innerHTML=("Password must contain 6 or more characters");
    return false;
  }
  if (name.value.length!=2)
  {
    name.style.border = "2px solid red";
    document.getElementById('loginError').innerHTML=("Name must contain 2 characters");
    return false;
  }
  if (pass.value!=pass2.value)
  {
    pass.style.border = "2px solid red";
    pass2.style.border = "2px solid red";
    document.getElementById('pass2Error').innerHTML=("Passwords do not match");
    return false;
  }

  return true;

}

</script>
