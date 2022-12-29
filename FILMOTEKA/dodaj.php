<?php
	$conn=mysqli_connect('localhost','root','','dane');
	$tytul=$_POST['tytul'];
	$gatunek=$_POST['gatunek'];
	$rok=$_POST['rok'];
	$ocena=$_POST['ocena'];
	
	$sql=mysqli_query($conn,"INSERT INTO filmy (id,tytul,rok,gatunek,ocena) VALUES (NULL,'$tytul','$rok','$gatunek','$ocena')");
	
	echo "Film ".$tytul." został dodany do bazy";
	
	mysqli_close($conn);
?>