<?php

require 'dbconnect.php';
 class loadListModel {



  function get(){
    $DB = new DB();
     return $DB->select('SELECT * FROM Cart');
  }

}
 ?>
