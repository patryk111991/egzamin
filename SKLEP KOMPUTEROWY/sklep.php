<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Hurtownia</title>
		<link rel="stylesheet" href="styl1.css" type="text/css" />
	</head>
	
	<body>
		<div id="logo">
			<img src="komputer.png" alt="hurtownia komputerowa" />
		</div>
		
		<div id="lista">
			<ul>
				<li>Sprzęt</li>
					<ol>
						<li>Procesory</li>
						<li>Pamięci RAM</li>
						<li>Monitory</li>
						<li>Obudowy</li>
						<li>Karty graficzne</li>
						<li>Dyski twarde</li>
					</ol>
				<li>Oprogramowanie</li>
			</ul>
		</div>
		
		<div id="formularz">
			<h2>Hurtownia komputerowa</h2>
			<form action="" method="POST">
				Wybierz kategorię sprzętu:
				<input type="number" name="kategoria" />
				<input type="submit" value="Sprawdź" />
			</form>
		</div>
		
		<div id="glowny">
			<h1>Podzespoły we wskazanej kategorii</h1>
			<?php
				$conn=mysqli_connect('localhost','root','','sklep');
				if (isset($_POST['kategoria']))
				{
					$d=$_POST['kategoria'];
					$sql=mysqli_query($conn,"SELECT typy.id,producenci.nazwa,podzespoly.nazwa,podzespoly.opis,podzespoly.cena FROM producenci INNER JOIN podzespoly ON producenci.id=podzespoly.typy_id INNER JOIN typy ON podzespoly.typy_id=typy.id WHERE typy.id='$d'");
					while($wynik=mysqli_fetch_array($sql))
					{
						echo $wynik[2];
						echo ' ';
						echo $wynik[3];
						echo ' CENA: ';
						echo $wynik[4];
						echo "<br/><br/>";
					} 
				}
				mysqli_close($conn);
			?>
		</div>
		
		<div id="stopka">
			<h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup> - 16<sup>00</sup><h3>
			<a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
			Partnerzy
			<a href="http://intel.pl">Intel</a>
			<a href="http://amd.pl">AMD</a>
			<p>Stronę wykonał: Patryk Podgórny</p>
		</div>
	</body>
</html>