<?php
$msg ='';
$username = $_POST['uname'];
$password = $_POST['psw'];

if (($username =='ABCD' || $username =='abcd') && (($password) =='1234')) {
  echo 'Vous etes connecte!';
  header("location: raouflix.html");
}
else {
  $msg = 'mot de passe ou nom utilisateur incorrect';
}
echo $msg;
 ?>
