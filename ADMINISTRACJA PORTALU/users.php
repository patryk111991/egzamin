<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Panel administratora</title>
        <link rel="stylesheet" href="styl4.css" type="text/css" />
    </head>

    <body>
        <div id="baner">
            <h3>Portal Społecznościowy - panel administratora</h3>
        </div>

        <div id="lewy">
            <h4>Użytkownicy</h4>
            <?php
                $conn=mysqli_connect('localhost','root','','dane4');
                $sql=mysqli_query($conn,"SELECT id,imie,nazwisko,rok_urodzenia,zdjecie FROM osoby ORDER BY id LIMIT 30");
                while($tab=mysqli_fetch_array($sql))
                {
                    $wiek = DATE("Y") - $tab[3];
                    echo "$tab[0]. $tab[1] $tab[2], $wiek<br/>";
                }
            ?>
            <a href="settings.html">Inne ustawienia</a>
        </div>

        <div id="prawy">
            <h4>Podaj id użytkownika</h4>
            <form action="users.php">
                <input type="text" name="id" />
                <button>ZOBACZ</button>
            </form>
            <hr>
            <?php

            ?>
        </div>

        <div id="stopka">
            Stronę wykonał: 123456789
        </div>
    </body>
</html>