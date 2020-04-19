<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            require("funkcje.php");
            
        ?>
        <h1>Nasz system</h1>
        <form method="post" action="logowanie.php">
        <fieldset>
        <legend>Logowanie:</legend>
            Login: <input type="text" name="login"></br>
            Hasło: <input type="password" name="haslo"></br>
            <input type="submit" name="zaloguj" value="Zaloguj">
        </fieldset>
        </form>
        <a href="user.php">User</a>
        <?php
            if(isSet($_POST["wyloguj"]))
            {
                $_SESSION["zalogowany"] = 0;
            }
        ?>
        <form method="get" action="cookie.php">
        <fieldset>
        <legend>Cookie:</legend>
            Czas: <input type="number" name="czas"></br>
            <input type="submit" name="utworzCookie">
        </fieldset>
        </form>
        </br>
        <?php
            if(isSet($_COOKIE['ciastko']))
            {
                echo 'Cookie value: ' . $_COOKIE['ciastko'];
            }
            else
            {
                echo 'Ciastko nie istnieje!';
            }
        ?>
    </body>
</html>
