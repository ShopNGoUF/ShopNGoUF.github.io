<?php

require 'dbconnect.php';
 class loadListModel {



  function get(){
    $DB = new DB();
    echo "nu körs get";
     return $DB->select('SELECT * FROM Cart');
  }

}
 ?>
