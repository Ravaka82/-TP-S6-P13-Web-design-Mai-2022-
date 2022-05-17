<?php
session_start();
include("function.php");
include("connexion.php");
       $idPays=$_POST['idPays'];
       $titre=$_POST['titre'];
       $dateActualite = $_POST['dateActualite'];
       $image = $_POST['image'];
       $descri = $_POST['descri'];
       $slug = slugify($titre);
       $sql="INSERT INTO Actualite(idPays,titre,dateActualite,image,descri,url) VALUES ('%s','%s','%s','%s','%s','%s')";
       $sql1=sprintf($sql,$idPays,$titre,$dateActualite,$image,$descri,$slug);
       echo $sql1;
        mysqli_query($connect,$sql1) or die(mysqli_error($connect)); 
        header('Location:BackOffice.php');
?>