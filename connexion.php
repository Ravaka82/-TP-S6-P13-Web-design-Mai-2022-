<?php 
    $connect=mysqli_connect('localhost','root','root','Climat'); 
    if ( $connect->connect_error){
    $error =  $connect->connect_error;
    echo("Not connected: " . $error);
}
?>