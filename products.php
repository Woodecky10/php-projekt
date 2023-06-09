<?php
session_start();
require 'check_if_added.php';
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
        <div class="container">
            <div class="jumbotron">
                <h1>Witamy w naszym sklepie!</h1>
                <p>Mamy najlepsze zdjęcia. Przepiękne krajobrazy wykonane przez profesjonalistów.</p>
            </div>
        </div>
        <div class="container">
            <?php
            require 'connection.php';
            $products_query = "select * from items";
            $products_result = mysqli_query($con, $products_query) or die(mysqli_error($con));


            foreach ($products_result as $value) {
                $urlImg = $value['URL'];

                echo '<div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src=' . "$urlImg" . ' alt="Picture">
                    </a>
                    <center>
                        <div class="caption">
                            <p>' . $value['price'] . ' zł</p>';
                if (!isset($_SESSION['email'])) {
                    echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Kup teraz</a></p>';
                } else {
                    if (check_if_added_to_cart($value['id'])) {
                        echo '<a href="#" class=btn btn-block btn-success disabled>W koszyku</a>';
                    } else {
                        echo '<a href="cart_add.php?id=' . $value['id'] . '" class="btn btn-block btn-primary" name="add" value="add"
                            class="btn btn-block btr-primary">Dodaj do koszyka</a>';
                    }
                }
                echo '</div></center></div></div>';
            }
            ?>
        </div>
    </div>
</body>

</html>