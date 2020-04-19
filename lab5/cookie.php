<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <a href="index.php">Wstecz</a></br>
        <?php
            setcookie("ciastko", $_GET['czas'], time() + $_GET['czas'], "/");
        ?>
    </body>
</html>