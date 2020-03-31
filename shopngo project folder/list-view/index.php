<?php
    require 'loadListModel.php';
    require '../cart-view/listContains.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Listor</title>
  </head>
  <body>

<div class="container">
    <div class="row text-light p-3">
      <div class="col-12">
        <h3 class="display-4 text-center">
          Välkommen!
        </h3>
      </div>
    </div>



    <?php
    echo '<form class="" action="../cart-view/index.php" method="post">';
    $loadListModel = new loadListModel(); //Här kopplas klassen loadListModel från den andra filen till den här och lagras som en variabel. Senare körs funktionen i loadListModel.php
      foreach ($loadListModel->get() as $listor) { // Här krävs loadlistmodel som ett objekt/en variabel så man kan köra foreach på den

        // Printar ut knapparna i columner som bestämmer storlek w-100
        echo '<div class="row text-center p-2">';
        echo '<div class="col-12">';
         //Hämtar list_pk för att sedan koppla knappen till rätt lista.
        echo '<button type="submit" name="valdLista" value="'.$listor['Cart_ID'].'" class="btn btn-lg btn-light w-100 p-3">';
        echo $listor['Cart_Namn']; //Hämtar värdet från Cart_Namn varje varv i foreach-loopen
        echo '</button>';

        echo "</div>";
        echo "</div>";


      }
        echo '</form>';
       ?>


       <div class="row text-center">

         <div class="col-12">

           <div class="jumbotron mt-5">

             Ovan visas dem köplistor du är medlem i, vill du gå med i en till är det bara att skriva in koden i rutan ovan!

           </div>

         </div>

       </div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
