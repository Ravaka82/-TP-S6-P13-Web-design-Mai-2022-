<?php 
include('Connexion.php');
	$idActualite=$_GET["idActualite"];
	$sql2="DELETE FROM Actualite WHERE idActualite = '%s'";
	$sql2=sprintf($sql2,$idActualite);
	$resultat2 =mysqli_query($connect,$sql2) or die(mysqli_error($connect)); 
	header('Location:BackOffice.php');
}


?>