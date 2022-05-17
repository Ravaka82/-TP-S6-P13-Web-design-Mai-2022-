<?php
            session_start();
			include("function.php");
			include("connexion.php");
			$idActualite=$_GET['idActualite'];
            $descriContenu=$_GET['descriContenu'];
            $imageContenu = $_GET['imageContenu'];
            $id=$_SESSION["idContenu"];
			$no="UPDATE Contenu SET idActualite='%s' , descriContenu= '%s', imageContenu= '%s'WHERE idContenu='%s'";
			$sql=sprintf($no,$idActualite,$descriContenu,$imageContenu,$id);
			;?> <br/> <?php
			$resultat=mysqli_query($connect,$sql) or die(mysqli_error($connect)); 
			header('Location:modifSupprContenu.php');
	;?>