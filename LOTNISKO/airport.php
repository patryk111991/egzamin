<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Odloty samolotów</title>
        <link rel="stylesheet" href="styl6.css" type="text/css" />
    </head>
    <body>
        <div id="baner1">
            <h1>Odloty z lotniska</h1>
        </div>

        <div id="baner2">
            <img src="zad6.png" alt="logotyp" />
        </div>

        <div id="glowny">
            <h4>tabela odlotów</h4>
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin');
                $tabela=mysqli_query($conn,"SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM przyloty");
                echo '<table border=2><tr><th>L.P.</th><th>Numer rejsu</th><th>Czas</th><th>Kierunek</th><th>Status</th></tr>';
                    while($wynik=mysqli_fetch_array($tabela))
                    {
                        echo "<tr><td>".$wynik[0]."</td><td>".$wynik[1]."</td><td>".$wynik[2]."</td><td>".$wynik[3]."</td><td>".$wynik[4]."</td></tr>";
                    }
                echo "</table>";
            ?>
        </div>

        <div id="stopka1">
            <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
        </div>

        <div id="stopka2">
            <?php
                if(isset($_COOKIE['cook'])) {
                    echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
                } else {
                    setcookie("cook", 1, TIME() + 3600);
                    echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
                }
            ?>
        </div>

        <div id="stopka3">
            Autor: PESEL
        </div>
    </body>
</html>