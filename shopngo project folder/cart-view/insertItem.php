<?php
require_once 'dbconnect.php';
$DB = new DB();

$valdItem = $_POST['valdItem'];
echo $valdItem . " = valdItem";
echo "<br>";
$valdLista = $_POST['valdLista'];
echo $valdLista . " = Aktivlista";

 //Jämföra Item_Namn och få ut Item_ID

  $DB = new DB();

  $itemID = $DB->select('SELECT *
                         FROM Item
                         WHERE Item.Namn = '.$valdItem.' ');

    echo $itemID . "hej";

  $DB->insert('INSERT INTO CartItems (Cart_ID, Item_ID, User_ID) VALUES (:cart_pk ,:item, :user) ', array(':cart_pk' => $valdLista,':item' => $itemID, ':user' => $_SESSION["usersession"]));





// header('Location: ../list-view/index.php'); // TEMP:


 ?>
