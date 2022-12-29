<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <title>Rozgrywki futbolowe</title>
        <link rel="stylesheet" href="styl.css" type="text/css" />
    </head>
    <body>
        <div id="baner">
            <h2>Światowe rozgrywki piłkarskie</h2>
            <img src="obraz1.jpg" alt="boisko" />
        </div>

        <div id="mecze">
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin');
                $sql=mysqli_query($conn,"SELECT zespol1,zespol2,wynik,data_rozgrywki FROM rozgrywka WHERE zespol1='EVG'");
                    while($wiersz=mysqli_fetch_array($sql))
                    {
                        echo '<div id="informacyjny">';
                        echo '<h3>'.$wiersz[0].' - '.$wiersz[1].'</h3>';
                        echo '<h4>'.$wiersz[2].'</h4>';
                        echo '<p>'.' w dniu: '.$wiersz[3].'</p>';
                        echo '</div>';
                    }
            ?>
        </div>

        <div id="glowny">
            <h2>Reprezentacja Polski</h2>
        </div>

        <div id="lewy">
            <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
            <form action="futbol.php" method="POST">
                <input type="number" name="pozycja" />
                <input type="submit" value="Sprawdź" />
            </form>
            <?php
                if (isset($_POST['pozycja']))
                {
                    $pozycja=$_POST['pozycja'];
                    $zapytanie=mysqli_query($conn,"SELECT imie,nazwisko FROM zawodnik WHERE pozycja_id='$pozycja'");
                    echo "<ul>";
                        while($wynik=mysqli_fetch_array($zapytanie))
                        {
                            echo '<li>'.$wynik[0].' '.$wynik[1];
                        }
                    echo "</ul>";
                }
                mysqli_close($conn);
            ?>
        </div>
    
        <div id="prawy">
            <img src="zad2.png" alt="pilkarz" />
            <p>Autor: PESEL</p>
        </div>

    </body>
</html>