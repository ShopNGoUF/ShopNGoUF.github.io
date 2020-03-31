<?php
require_once 'dbconnect.php';
require_once 'loadItemsModel.php';
require_once 'listContains.php';
$cartNr = $_POST['valdLista'];
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title> <!-- Title = PHP hämtar listnamn -->
    <!-- -->
  </head>
  <body>
    <!-- Listnamn högst upp -->

    <div class="container">

      <div class="row bg-danger p-3 text-white">

        <div class="col-12 text-center">

          <?php

      $listContains = new listContains($cartNr);

      foreach ($listContains->getListName($cartNr) as $listnamn) {
      echo'<h1 class="display-3">' . $listnamn['Cart_Namn'] . '</h1>';
      }

       ?>
         </div>

     </div>

      <div class="row text-center">

        <div class="col-12">

          <div class="dropdown">
            <button id="läggTillVara"class="btn btn-lg w-100 btn-block btn-light dropdown-toggle  p-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Lägg till vara
            </button>

            <form class="dropdown-menu w-100 dropdown-menu-block text-center" id="itemForm"aria-labelledby="dropdownMenuButton" method="post" action="insertItem.php">

              <?php //ladda in varor som alternativ

                $loadItemModel = new loadItemsModel();

                foreach ($loadItemModel->get() as $items) {

                echo '<button class="dropdown-item" name="valdItem" type="submit" value="'.$items['Namn'].'">'.$items['Namn'].'</button> ';

                }

                echo '<input type="hidden" value=" ' . $cartNr . ' " name="valdLista">';

                echo "</form>";

                echo "</div>";
               ?>

             </div>
             </div>

             <div class="jumbotron mt-5">



             <div class="row">

               <div class="col-12">



            <?php //ladda in varorna som finns i listan

              $listContains = new listContains();
              echo '<ul class="text-dark">';
              foreach ($listContains->getItems($cartNr) as $itemContained) {


              echo '<li class="p-3">' . $itemContained['Namn'] . "<br>";
              echo '<hr class="bg-secondary">';

              }
              echo "</ul>";
             ?>

              </div>

                </div>

                       </div>

             <div class="row ">

               <div class="col-12">

                 <footer class="bg-danger w-100 text-light">

                   <?php

                   $listContains = new listContains();
                   echo '<ul class="bg-danger text-light">';
                   foreach ($listContains->getUsers($cartNr) as $UsersContained) { //Skriver ut vilka användare som är med i listan

                   echo '<li class="p-3 ">' . $UsersContained['Username'] . "<br>";
                   echo '<hr class="text-light">';

                   }
                   echo "</ul>";
                  ?>

                 </footer>

               </div>

             </div>

           </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js" charset="utf-8"></script>

  </body>
</html>
