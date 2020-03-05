<?php
session_start();

require('dbconnect.php');

$unsanitizedUser=$_GET['username'];
$unsanitizedPass=$_GET['password'];

$dbcon= new dbconnect();

$cleanUser = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$cleanPass = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$stmt=$dbcon->pdo->query('SELECT * FROM users WHERE username=":user" and password=":pass"');
$stmt->execute(['user' => $user, 'pass' => $pass]);

// echo password_hash("password", PASSWORD_DEFAULT); //använd nåt sånt här för att hasha lösenordet

while($row=$stmt->fetch()){
echo $row['username'].' ';
echo $row['password'];
echo '<br>';

  if($user==$row['username'] && $pass==$row['password']){

    $_SESSION["usersession"]=$user;
    header('Location: landningssida.php'); //GÖR DEN HÄR RELEVANT

  }

}


echo"fel inloggningsinformation";

header('Location: index.php?login=false');



echo"username: ".$user." password: ".$pass."<br> Inte inloggad";


 ?>
