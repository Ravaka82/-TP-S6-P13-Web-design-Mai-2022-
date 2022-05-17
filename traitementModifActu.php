<?php
            session_start();
			include("function.php");
			include("connexion.php");
			$idPays=$_GET['idPays'];
            $titre=$_GET['titre'];
            $dateActualite = $_GET['dateActualite'];
            $image = $_GET['image'];
            $descri = $_GET['descri'];
            $slug = slugify($titre);
            $id=$_SESSION["idActualite"];
			$no="UPDATE Actualite SET idPays='%s' , titre= '%s', dateActualite= '%s', image= '%s' , descri='%s',url= '%s' WHERE idActualite='%s'";
			$sql=sprintf($no,$idPays,$titre,$dateActualite,$image,$descri,$slug,$id);
			;?> <br/> <?php
			$resultat=mysqli_query($connect,$sql) or die(mysqli_error($connect)); 
			header('Location:BackOffice.php');
	;?>