<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mój kalendarz</title>
        <link rel="stylesheet" href="styl5.css" type="text/css" />
    </head>
    <body>
        <div id="baner1">
            <img src="logo1.png" alt="Mój kalendarz" />
        </div>

        <div id="baner2">
            <h1>KALENDARZ</h1>
            <?php
                $conn=mysqli_connect('localhost','root','','baza5');
                $data=mysqli_query($conn,"SELECT miesiac, rok FROM zadania WHERE dataZadania='2020-07-01'");
                    while($wiersz=mysqli_fetch_array($data))
                    {
                        echo '<h3>'.'miesiąc: '.$wiersz['0'].' rok: '.$wiersz['1'].'</h3>';
                    }
            ?>
        </div>

        <div id="glowny">
        <?php
            $wykaz=mysqli_query($conn,"SELECT dataZadania,wpis FROM zadania WHERE miesiac='lipiec'");
            while($wynik=mysqli_fetch_array($wykaz))
            {
                echo '<div id="blok"';
                echo '<h5>'.$wynik['0'].'</h5>';
                echo '<p>'.$wynik['1'].'</p>';
                echo '</div>';
            }
        ?>
        </div>

        <div id="stopka">
            <form action="kalendarz.php" method="POST">
                dodaj wpis: <input type="text" name="wpis" />
                <input type="submit" value="DODAJ" />
            </form>
            <p>Stronę wykonał: PESEL</p>
            <?php
                if (isset($_POST['wpis']))
                {
                    $wpis=$_POST['wpis'];
                    $sql=mysqli_query($conn,"UPDATE zadania SET wpis='$wpis' WHERE dataZadania='2020-07-13'");
                }
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>