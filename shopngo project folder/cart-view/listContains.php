<?php
require_once 'dbconnect.php';

class listContains{

function getItems($cartNr){ //Hämtar alla items som skall vara med i den aktuella kundvagnen.

  $DB = new DB();
   return $DB->select('SELECT * FROM Item, Cart, CartItems WHERE Cart.Cart_ID = CartItems.Cart_ID AND Item.Item_ID = CartItems.Item_ID AND CartItems.Cart_ID = '.$cartNr.' ');

}

function getListName($cartNr){ //Den här funktionen ska hämta listans namn så att man kan printa ut det högst upp

$DB = new DB();

$cartNamn =  $DB->select('SELECT Cart.Cart_Namn, Cart.Cart_ID
                    FROM Cart
                    WHERE Cart.Cart_ID LIKE '.$cartNr.'');

return $cartNamn;

}

function getUsers($cartNr){ //Den här funktionen hämtar alla användare som hör till vald lista

  $DB = new DB();

  $användare =  $DB->select('SELECT DISTINCT User.User_ID, User.Username, UserCarts.User_ID, UserCarts.Cart_ID
                      FROM User, UserCarts
                      WHERE User.User_ID=UserCarts.User_ID AND UserCarts.Cart_ID LIKE '.$cartNr.'');

  return $användare;


}



}
