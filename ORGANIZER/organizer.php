<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Organizer</title>
		<link rel="stylesheet" href="styl6.css" type="text/css" />
	</head>
	
	<body>
		<div id="baner-lewy">
			<h1>MÓJ ORGANIZER</h1>
		</div>
		
		<div id="baner-srodkowy">
			<form action="organizer.php" method="POST">
				Wpis wydarzenia: <input type="text" name="wpis" />
				<input type="submit" value="ZAPISZ" />
			</form>
			    <?php
					$conn=mysqli_connect('localhost','root','','egzamin6');
					if (isset($_POST['wpis']))
					{
						$wpis=$_POST['wpis'];
						$sql=mysqli_query($conn,"UPDATE zadania SET wpis='$wpis' WHERE dataZadania='2020-08-27'");
					}
			    ?>
		</div>
		
		<div id="baner-prawy">
			<img src="logo2.png" alt="Mój organizer" />
		</div>
		
		<div id="glowny">
			<?php
				$blok=mysqli_query($conn,'SELECT dataZadania,miesiac,wpis FROM zadania WHERE miesiac="sierpien"');
				while($wiersz=mysqli_fetch_array($blok))
				{
					echo '<div id="blok">';
					echo "<h6>".$wiersz['0'].", ".$wiersz['1']."</h6>";
					echo "<p>".$wiersz['2']."</p>";
					echo '</div>';
				}
			?>
		</div>
		
		<div id="stopka">
			<?php
				$naglowek=mysqli_query($conn,"SELECT miesiac,rok FROM zadania WHERE miesiac='sierpien' ORDER BY miesiac LIMIT 1");
				while($dane=mysqli_fetch_array($naglowek))
				{
					echo "<h1>"."miesiąc: ".$dane['0'].", rok: ".$dane['1']."</h1>";
				}
			?>
			<p>Stronę wykonał: PESEL</p>
		</div>
	</body>
</html>