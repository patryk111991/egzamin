<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Prognoza pogody Poznań</title>
		<link rel="stylesheet" href="styl4.css" type="text/css" />
	</head>
	
	<body>
		<div id="baner">
			<div id="lewy">
				<p>maj, 2019 r.</p>
			</div>
			
			<div id="srodkowy">
				<h2>Prognoza dla Poznania</h2>
			</div>
			
			<div id="prawy">
				<img src="logo.png" alt="prognoza" />
			</div>
		</div>
		
		<div id="lewy2">
			<a href="kwerendy.txt">Kwerendy</a>
		</div>
		
		<div id="prawy2">
			<img src="obraz.jpg" alt="Polska, Poznań" />
		</div>
		
		<div id="glowny">
			<?php
				$conn=mysqli_connect('localhost','root','','prognoza');
				$sql=mysqli_query($conn,"SELECT id, data_prognozy, temperatura_noc, temperatura_dzien, opady, cisnienie FROM pogoda");
				echo "<table><tr><th>L.p.</th><th>DATA</th><th>NOC - TEMPERATURA</th><th>DZIEŃ - TEMPERATURA</th><th>OPADY [mm/h]</th><th>CIŚNIENIE [hPa]</th></tr>";
					while($wiersz=mysqli_fetch_array($sql))
					{
						echo "<tr><td>".$wiersz['0']."</td><td>".$wiersz['1']."</td><td>".$wiersz['2']."</td><td>".$wiersz['3']."</td><td>".$wiersz['4']."</td><td>".$wiersz['5']."</td></tr>";
					}
				echo "</table>";
			?>
		</div>
		
		<div id="stopka">
			<p>Stronę wykonał: PESEL</p>
		</div>
	</body>
</html>