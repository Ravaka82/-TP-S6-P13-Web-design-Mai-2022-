<?php
session_start();
include("connexion.php");
       $idActualite=$_POST['idActualite'];
       $descriContenu=$_POST['descriContenu'];
       $imageContenu = $_POST['imageContenu'];
       $sql="INSERT INTO Contenu(idActualite,descriContenu,imageContenu) VALUES ('%s','%s','%s')";
       $sql1=sprintf($sql,$idActualite,$descriContenu,$imageContenu);
       echo $sql1;
       mysqli_query($connect,$sql1) or die(mysqli_error($connect)); 
       header('Location:modifSupprContenu.php');
?>