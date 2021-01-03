<!DOCTYPE html>
<html>
	<head>
		<!-- Start META -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="keywords" content="Регистрация пользователей" />
		<meta name="description" content="Регистрация пользователей" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/valid.js"></script>

    <!-- TITLE -->
		<title>Регистрация пользователей </title>
  </head>
    <form name='forms' onsubmit='return validate();' action='regXML.php' method='POST' >
      login <input type='text'  name='login' id='login'>
      <div id='loginError' class='val_error'></div>
      <br />
      password <input type='password' name='pass' id="pass">
      <div id='passError' class='val_error'></div>
      <br />
      confirm password <input type='password' name='pass2' id="pass2">
      <div id='pass2Error' class='val_error'></div>
      <br />
      name <input type='text' name='name' id="name">
      <div id='nameError' class='val_error'></div>
      <br />
      email <input type='email' name='email' id="email">
      <div id='emailError' class='val_error'></div>
      <input type='submit' name='submit' value='submit'>
    </form>


</html>
