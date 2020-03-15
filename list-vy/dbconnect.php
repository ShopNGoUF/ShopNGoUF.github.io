<?php

class DB{
function __construct(){

  $servername = "localhost";
  $username = "shopngo";
  $password = "AmpAltRalte";

  try{
    $conn = new PDO("mysql:host=$servername;dbname=shopngo", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      }


  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }

    }

    function select($sql, $cond=null){
      $result = false;
      try {
        $this->stmt = $this->prepare($sql);
        $this->stmt->execute($cond);
        $result = $this->stmt->fetchAll();

      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }


    // try {
    //   $this->pdo = new PDO(
    //     "mysql:host=localhost;
    //     dbname=mvctemplate;
    //     charset=utf8",
    //     "root",
    //      "",
    //      [
    //       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //       PDO::ATTR_EMULATE_PREPARES => false,
    //     ]
    //   );
  }
?>
