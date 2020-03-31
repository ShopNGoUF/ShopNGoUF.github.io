<?php
session_start();
$_SESSION["usersession"]=1;
class DB{


  private $pdo=null;
  private $stmt=null;
function __construct(){

  $servername = "localhost"; // Inloggningslänk
  $username = "shopngo"; // Inloggningsuppgifter
  $password = "AmpAltRalte"; // Inloggningsuppgifter

  try{
    $this->pdo = new PDO("mysql:host=$servername;dbname=shopngo" , $username, $password);

      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
      }


  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }

    }

    function insert($sql, $cond=null){
      $this->stmt= $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    }

    function select($sql, $cond=null){
      $result = false;
      try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);
        $result = $this->stmt->fetchAll();

      } catch (Exception $ex) { die($ex->getMessage()); }


      $this->stmt = null;
      return $result;
    }


  }
?>
