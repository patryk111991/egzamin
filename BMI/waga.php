<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Twój wskaźnik BMI</title>
        <link rel="stylesheet" href="styl4.css" type="text/css" />
    </head>
    <body>
        <div id="baner">
            <h2>Oblicz wskaźnik BMI</h2>
        </div>

        <div id="logo">
            <img src="wzor.png" alt="liczymi BMI" />
        </div>

        <div id="lewy">
            <img src="rys1.png" alt="zrzuć kalorię" />
        </div>

        <div id="prawy">
            <h1>Podaj dane</h1>
            <form action="" method="POST">
                Waga: <input type="number" name="waga" /><br/>
                Wzrost [cm]: <input type="number" name="wzrost" /><br/>
                <input type="submit" value="Licz BMI i zapisz wynik" />
            </form>
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin');
                if(isset($_POST['waga']) && isset($_POST['wzrost']))
                {
                    $waga=$_POST['waga'];
                    $wzrost=$_POST['wzrost'];

                    $bmi=ROUND($waga/($wzrost/100*$wzrost/100),2);

                    echo 'Twoja waga: '.$waga;
                    echo ' Twój wzrost: '.$wzrost;
                    echo '<br>';
                    echo 'BMI wynosi: '.$bmi;
                }
            ?>
        </div>
        
        <div id="glowny">
            <?php
                $tabela=mysqli_query($conn,"SELECT id, informacja, wart_min FROM bmi");
                echo '<table><tr><th>L.P.</th><th>Interpretacja</th><th>zaczyna się od...</th></tr>';
                    while($wynik=mysqli_fetch_array($tabela))
                    {
                        echo '<tr><td>'.$wynik['0'].'</td><td>'.$wynik['1'].'</td><td>'.$wynik['2'].'</td></tr>';
                    }
                echo '</table>';

                mysqli_close($conn);
            ?>
        </div>

        <div id="stopka">
            Autor: PESEL
            <a href="kw2.jpg">Wynik działania kwerendy 2</a>
        </div>
    </body>
</html>