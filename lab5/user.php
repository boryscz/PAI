<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            require_once("funkcje.php");
            if ($_SESSION["zalogowany"]==1)
            {
                echo "Zalogowano";
                echo $_SESSION["zalogowanyImie"];
            }
            else
            {
                header("Location: index.php");
            }
        ?>
        <a href="index.php">Strona Główna</a>
        <form method="post" action="index.php">
        <fieldset>
        <legend>Akcje:</legend>
            <input type="submit" name="wyloguj" value="Wyloguj"></br>
        </fieldset>
        </form>
        <form action='user.php' method='POST' enctype='multipart/form-data'>
        <fieldset>
        <legend>Zdjęcie:</legend>
            <input name="myfile" type="file">
            <input name="zaladujZdjecie" type="submit" value="Załaduj">
            <?php
            if(isSet($_POST["zaladujZdjecie"]))
            {
                $currentDir = getcwd();
                $uploadDirectory = "/zdjeciaUzytkownikow/";
                $fileName = $_FILES['myfile']['name'];
                $fileSize = $_FILES['myfile']['size'];
                $fileTmpName = $_FILES['myfile']['tmp_name'];
                $fileType = $_FILES['myfile']['type'];
                if($fileName != "" and
                    ($fileType == 'image/png' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG' or $fileType == 'image/PNG'))
                {
                    $uploadPath = $currentDir . $uploadDirectory . $fileName;
                    if(move_uploaded_file($fileTmpName, $uploadPath))
                        echo "Zdjęcie zostało załadowane na serwer FTP";
                }
            }
            ?>
        <img src="/zdjeciaUzytkownikow/bean.jpg" alt="Tekst alternatywny">
        </fieldset>
        </form>
        
    </body>
</html>