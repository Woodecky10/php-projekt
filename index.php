<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Projekt WSB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="mainBannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Profesjonalne zdjęcia.</h1>
                       <p>Zniżka 40% na krajobrazy miejskie.</p>
                       <a href="products.php" class="btn btn-danger">Zamów teraz</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="https://picsum.photos/id/43/1920/1080" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Miasto</p>
                                        <p>Widoki z wielkich metropolii.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="https://picsum.photos/id/62/1920/1080" alt="Forest">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Lasy</p>
                                    <p>Odświeżające naturalne widoki.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="https://picsum.photos/id/16/1920/1080" alt="Water">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Wodne</p>
                                   <p>Wyśmienite zdjęcia z nad rzek i jezior.</p>
                               </div>
                           </center>
                       </div>
                   </div>

               </div>
           </div>
        </div>
    </body>
</html>