<?php

require_once 'dbconnect.php';
 class loadItemsModel {


function get(){
      $DB = new DB();
      return $DB->select('SELECT * FROM Item'); // Hämtar alla varor från Items
}

}
 ?>
