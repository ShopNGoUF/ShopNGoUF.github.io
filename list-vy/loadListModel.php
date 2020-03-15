<?php

require 'dbconnect.php';
 class loadListModel {



  function get(){
    $DB = new DB();
    echo " | nu körs get |";
    return $this->$DB->select('SELECT * FROM Cart');
  }

}
 ?>
