<?php 
include('Connexion.php');
     $login= $_POST['login'];
     $mdp=$_POST['mdp'];
     $mdp=sha1($mdp);
     $sql="SELECT*FROM Admin WHERE login='%s' AND mdp='%s'";
     $sql=sprintf($sql,$login,$mdp); 
     $resultat=mysqli_query($connect,$sql) or die(mysqli_error($connect)); 
     $val=mysqli_fetch_assoc($resultat);
    if($login==$val['login'] && $mdp==$val['mdp'])
    {
        header('Location:BackOffice.php');
}
?>
