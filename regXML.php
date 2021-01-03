<?php

if(isset($_POST['submit']))
{

  $login=$_POST['login'];
  $sault = "saltsalt";
  $pass=md5($_POST['pass'] . $sault);
  $email=$_POST['email'];
  $name=$_POST['name'];
  $xml=simplexml_load_file("1.xml") or die("Ошибка: Невозможно создать объект");
  foreach ($xml->info->login as $log) {
      if($login!=$log)
      {
        $xml = new DomDocument("1.0","UTF-8");
        $xml->load('1.xml');

        $rootTag=$xml->getElementsByTagName("root")->item(0);
        $infoTag=$xml->createElement("info");
          $loginTag=$xml->createElement("login", $login);
          $passTag=$xml->createElement("pass", $pass);
          $emailTag=$xml->createElement("email", $email);
          $nameTag=$xml->createElement("name", $name);



          $infoTag->appendChild($loginTag);
          $infoTag->appendChild($passTag);
          $infoTag->appendChild($emailTag);
          $infoTag->appendChild($nameTag);


        $rootTag->appendChild($infoTag);
        $xml->save('1.xml');


      }
      else {
        header ('Location: reg.php');
        exit();
      }
    }
  }


?>
