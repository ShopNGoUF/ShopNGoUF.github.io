<?php
session_start();

require('dbconnect.php');

$user=$_GET['username'];
$pass=$_GET['password'];

$dbcon= new dbconnect();

// $search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);

$stmt=$dbcon->pdo->query('SELECT * FROM users WHERE username=".$user." and password=".$pass."'); //TOTAL CONFUSION
$stmt->execute();

// echo password_hash("password", PASSWORD_DEFAULT); //använd nåt sånt här för att hasha lösenordet

// $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :email AND password=".$pass."'); //detta ska vara ett bättre sätt att logga in för att skydda sig mot SQL-injektioner
// $stmt->execute(['email' => $email, 'status' => $status]);
// $user = $stmt->fetch();
//
// $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ".$user." AND password=".$pass."');
// $stmt->execute(["$user." => username, ".$pass." => password]);

while($row=$stmt->fetch()){
echo $row['username'].' ';
echo $row['password'];
echo '<br>';

  if($user==$row['username'] && $pass==$row['password']){

    $_SESSION["usersession"]=$user;
    header('Location: inloggad.php'); //GÖR DEN HÄR RELEVANT

  }

}


echo"fel inloggningsinformation";

header('Location: index.php?login=false');



echo"username: ".$user." password: ".$pass."<br> Inte inloggad";


 ?>
