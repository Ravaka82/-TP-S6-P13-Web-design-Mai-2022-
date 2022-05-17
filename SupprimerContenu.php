<?php 
include('connexion.php');
try {
	$idContenu=$_GET["idContenu"];
	$idActualite=$_GET["idActualite"];
	$sql="DELETE FROM Contenu WHERE idContenu = '%s'";
	$sql2="DELETE FROM Actualite WHERE idActualite = '%s'";
	$sql=sprintf($sql,$idContenu);
	$sql2=sprintf($sql2,$idActualite);
	$resultat =mysqli_query($connect,$sql) or die(mysqli_error($connect)); 
	$resultat2 =mysqli_query($connect,$sql2)  or die(mysqli_error($connect)); 
	 header('Location:modifSupprContenu.php');
	}catch (Exception $e) {
 		 echo $e->errorMessage();
	}

?>