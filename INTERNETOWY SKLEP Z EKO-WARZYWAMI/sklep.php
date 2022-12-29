<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Warzywniak</title>
		<link rel="stylesheet" href="styl2.css" type="text/css" />
	</head>
	
	<body>
		<div id="baner">
			<div id="lewy">
				<h1>Internetowy sklep z eko-warzywami</h1>
			</div>
			
			<div id="prawy">
				<ol>
					<li>warzywa</li>
					<li>owoce</li>
					<li><a href="https://terapiasokami.pl" target="_blank">soki</a></li>
				</ol>
			</div>
		</div>
		
		<div id="glowny">
			<?php
				$conn=mysqli_connect('localhost','root','','dane2');
				$sql=mysqli_query($conn,"SELECT nazwa,ilosc,opis,cena,zdjecie FROM produkty WHERE Rodzaje_id <= 2");
				
					while ($wynik=mysqli_fetch_array($sql))
					{
						echo '<div id="skrypt">';
						echo "<img src=\"$wynik[4]\" alt=\"warzywniak\" />";
						echo '<h5>'.$wynik['0'].'</h5>';
						echo '<p>'.'opis: '.$wynik['2'].'</p>';
						echo '<p>'.'ilość: '.$wynik['1'].'</p>';
						echo '<h2>'.'cena: '.$wynik['3'].' zł'.'</h2>';
						echo '</div>';
					}
				
			?>
		</div>
		
		<div id="stopka">
			<form action="sklep.php" method="POST">
				Nazwa: <input type="text" name="nazwa" />
				Cena: <input type="text" name="cena" />
				<input type="submit" value="Dodaj produkt" />
			</form>
			Stronę wykonał: PESEL
		</div>
	</body>
</html>