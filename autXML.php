<?php

if(isset($_POST['submit']))
{

  $login=$_POST['login'];
  $sault = "saltsalt";
  $pass=md5($_POST['pass'] . $sault);
  $xml=simplexml_load_file("1.xml") or die("Ошибка: Невозможно создать объект");
  foreach ($xml->info->login as $log) {
    foreach ($xml->info->pass as $pas) {
      if($login==$log && $pass==$pas)
      {
        header ('Location: user.php');
      }
      else {
        header ('Location: aut.php');
        exit();
      }
    }
  }
}
?>
