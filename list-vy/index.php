<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container text-light">

      <div class="row color-light">
        <h1 class="color-white">Välkommen ....</h1>
      </div>
      <div class="row">
        <h2>Listor listas nedanför</h2>
      </div>

      <div class="row">

        <div class="col-12">

        <button class="btn btn-lg btn-light "type="button" name="button">Lista X</button>
        </div>
      </div>

      <div class="row jumbotron text-dark">

          <?php

          session_start();

          require 'loadListModel.php';

          $loadListModel = new loadListModel(); //Här kopplas klassen loadListModel från den andra filen till den här och lagras som en variabel. Senare körs funktionen i loadListModel.php


            foreach ($loadListModel->get() as $listor) { // Här krävs loadlistmodel som ett objekt/en variabel så man kan köra foreach på den

              //echo "<a href='www.google.se'><h1>".$listor.['cart_namn']."</h1></a>";
              echo $listor['cart_namn'];

            }

           ?>

  </div>




    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
