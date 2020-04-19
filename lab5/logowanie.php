<?php 
            require("index.php");
            if(isSet($_POST["zaloguj"])):
                $log = $_POST["login"];
                $pass = $_POST["haslo"];
                //echo $log . " " . $pass;
                if($log==$osoba1->login && $pass==$osoba1->haslo)
                    {
                        //session_start()
                        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
                        $_SESSION["zalogowany"] = 1;
                        header("Location: user.php");
                    }
                elseif($log==$osoba2->login && $pass==$osoba2->haslo)
                    {
                        //session_start()
                        $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
                        $_SESSION["zalogowany"] = 1;
                        header("Location: user.php");
                    }
                else
                    {
                        header("Location: index.php");
                    }
            endif; 
?>